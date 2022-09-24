<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    //

    public function index() {
        $subcategories = SubCategory::all();
        return view('admin.SubCategory.index',['subcategories' => $subcategories]);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.SubCategory.create',['categories' => $categories]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'category'      => 'required|unique:sub_categories',
            'description'   => 'required',
            'category_id'   => 'required|integer',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $name = time().Str::random(10).'.'.$extension;
            $file->move('uploads',$name);
            $validateData['image'] = $name;
        }

        $validateData['created_at'] = $validateData['updated_at'] = Carbon::now();
        SubCategory::create($validateData);

        return redirect()->route('subcategory.index')->with('success','SubCategory Added Successfully');
    }

    public function edit($id) {
        $subcategory = SubCategory::find($id);
        $categories = Category::all();
        if(is_null($subcategory)) {
            return redirect()->route('subcategory.index')->with('error',"SubCategory With id $id is not Found");
        }

        return view('admin.SubCategory.edit',[
            'subcategory' => $subcategory,
            'categories'  => $categories
        ]);
    }
    public function update(Request $request, $id) {
        
    }
}
