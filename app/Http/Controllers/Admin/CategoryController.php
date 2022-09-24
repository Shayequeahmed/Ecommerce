<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
    /** 
     * Display a listing of the resource. 
     */  
    public function index() {
        $categories = Category::all();
        return view('admin.Category.index',['categories' => $categories]);
    }

    /** 
     * Show the form for creating a new resource.        
    */  

    public function create() {

        return view('admin.Category.create');
    }

    /** 
     * Store a newly created resource in storage. 
     * 
     * @param  \Illuminate\Http\Request   $request  
     */  

    public function store(Request $request) {
        $validateData = $request->validate([
            'category' => 'required|unique:categories',
            'description' => 'required',
            //'image' => 'required|image|mimes:jpeg,jpg|max:1024'
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $name = time().Str::random(10).'.'.$extension;
            $file->move('uploads',$name);
            $validateData['image'] = $name;
        }
        
        $validateData['created_at'] = $validateData['updated_at'] = Carbon::now();
        Category::create($validateData);

        return redirect()
                ->route('category.index')
                    ->with('success','Category Added Successfully');
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */

    public function edit($id) {

        $category = Category::find($id);

        if(is_null($category)) {
            return redirect()
                        ->route('category.index')
                            ->with('error',"Category with id $id is not Found");
        }

        return view('admin.Category.edit',['category' => $category]);
    }

    /** 
     * Update the specified resource in storage. 
     * @param  \Illuminate\Http\Request   $request 
     * @param  int  $id 
     * @return \Illuminate\Http\Response 
     */
    public function update(Request $request, $id) {

        $validateData = $request->validate([
            'category' => 'required | unique:categories,category,'.$id,
            'description' => 'required'
        ]);

        $category = Category::find($id);
        if(!is_null($category)) {

            $oldImage = $category->image;
            $validateData['image'] = $oldImage;

            if($request->hasFile('image')) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $name = time().Str::random(10).'.'.$extension;
                $file->move('uploads',$name);
                $validateData['image'] = $name;
            }

            $validateData['updated_at'] = Carbon::now();
            $category->update($validateData);

            if(!is_null($oldImage) && $request->hasFile('image')) {
                $imagePath = public_path('uploads/'.$oldImage);
                unlink($imagePath);
            }

            return redirect()->route('category.index')->with('success','Category Updated Successfully');

        }
    }  

}
