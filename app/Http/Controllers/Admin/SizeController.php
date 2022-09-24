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

    public function create() {
        return view('admin.Size.create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'size' => 'required|unique:sizes',
        ]);

        Size::create($validateData);
        return redirect()->route('size.index')->with('success','Size Added Successfully');
    }

    public function edit($id) {
        $size = Size::find($id);
        if(is_null($size)) {
            return redirect()->route('size.index')->with('error' ,"Size with id $id is not found");
        }
        return view('admin.Size.edit',['size' => $size]);
    }
}
