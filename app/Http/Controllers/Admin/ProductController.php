<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::paginate(10);
        return view('admin/Product/index',['products' => $products]);
    }

    public function fetchsubcategory(Request $request)
    {
        $data['subcategories'] = SubCategory::where("category_id", $request->category_id)->get();
        return response()->json($data);
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.Product.create',['categories' => $categories,'brands' => $brands]);
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'bail|required | unique:products |max:255',
            'code' => 'bail|required|unique:products|max:255',
            'summary' => 'required',
            'description' => 'required',
            'price_mp' => 'bail|required|integer|gt:0',
            'price_sp' => 'bail | required | integer | gt:0',
            'brand_id' => 'bail| required|gt:0',
            'category_id' => 'bail | required| gt:0'
            'sub_category_id' => 'bail | required| gt:0'
        ]);
        
        $validateData['created_at'] = $validateData['updated_at'] = Carbon::now();
        $lastProductId = Product::create($validateData)->id;
        return redirect()->route('productcolor')->with('success','Please Add the Variation of the product');
    }
}
