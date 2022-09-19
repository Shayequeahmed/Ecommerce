<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    /** 
     * Display a listing of the resource. 
     */  
    public function index() {
        return view('admin.Category.index');
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
     * @return \Illuminate\Http\Response 
     */  

    public function store(Request $request) {
        echo '<pre>';
        print_r($request->input());
        print_r($request->files->all());
        echo '</pre>';

    }
}
