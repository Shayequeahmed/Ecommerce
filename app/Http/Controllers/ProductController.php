<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index() {
        return view('Product.index');
    }

    public function show($slug = '') {
        return view('Product.show');
    }
}
