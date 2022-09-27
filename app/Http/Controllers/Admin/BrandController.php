<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //

    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.Brand.index',['brands' => $brands]);
    }

    public function create()
    {
        return view('admin.Brand.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|unique:brands',
        ]);

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $name = time().Str::random(10).'.'.$extension;
            $file->move('uploads',$name);
            $validateData['image'] = $name;
        }
        $validateData['created_at'] = $validateData['updated_at'] = Carbon::now();
        Brand::create($validateData);
        return redirect()->route('brand.index')->with('success','Brand added Successfully');
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        if(is_null($brand)) {
            return redirect()->route('brand.index')->with('error',"Brand With Id $id is not Found");
        }
        return view('admin.Brand.edit',['brand' => $brand]);
    }
}
