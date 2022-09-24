<?php

namespace App\Http\Controllers\Admin;

use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SizeController extends Controller
{
    //
    public function index() {
        $sizes = Size::all();
        return view('admin.Size.index',['sizes' => $sizes]);
    }
}
