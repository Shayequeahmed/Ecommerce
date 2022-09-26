<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    //

    public function index()
    {
        $brands = Brand::paginate(10);
        return view('admin.Brand.index',['brands' => $brands]);
    }
}
