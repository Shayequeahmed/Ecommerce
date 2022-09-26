<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ColorController extends Controller
{
    //
    public function index()
    {
        $colors = Color::paginate(10);
        return view('admin.Color.index',['colors' => $colors]);
    }

    public function create()
    {
        return view('admin.Color.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'color' => 'required|unique:colors',
            'code'  => 'required|unique:colors',
        ]);
        Color::create($validateData);
        return redirect()->route('color.index')->with('success','Color Created Successfully');
    }

    public function edit($id)
    {
        $color = Color::find($id);
        if(is_null($color)) {
            return redirect()->route('color.index')->with('error',"Color with id $id is not found");
        }

        return view('admin.Color.edit',['color'=> $color]);
    }
}
