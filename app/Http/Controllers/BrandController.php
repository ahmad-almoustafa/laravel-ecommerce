<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
    
        $brands=Brand::latest()->get();
        return view('brands.index', compact('brands'));

    }
    //implicit binding
    public function edit(Brand $brand){
         return view('brands.edit',compact('brand'));
    }

    public function update(Request $request, Brand $brand){
        $request->validate([
            'name'=>'required|max:255'
        ]);
        $brand->update($request->all());

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');

    }
}
