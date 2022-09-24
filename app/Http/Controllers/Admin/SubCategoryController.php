<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubCategoryController extends Controller
{
    //

    public function index() {
        $subcategories = SubCategory ::all();
        /*var_dump($subcategories);
        die;*/
        return view('admin.SubCategory.index',['subcategories' => $subcategories]);
    }

    public function create() {
        $categories = Category::all();
        return view('admin.SubCategory.create',['categories' => $categories]);
    }
}
