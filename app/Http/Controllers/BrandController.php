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

    public function create(){
        return view('brands.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|max:255'
        ]);
        $brand= new Brand();
        $brand->name=$request->name;
        $brand->description=$request->description;
        //saved on storage/app/public
        //run 'php artisan storage:link' to creates a symbolic link from public/storage to storage/app/public. 
        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $filename=time().'_'.$logo->getClientOriginalName();
            $path = $logo->storeAs('public/brands', $filename);
            $brand->logo = $filename;

        }
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand added successfully');
    }
    //implicit binding
    public function edit(Brand $brand){
         return view('brands.edit',compact('brand'));
    }

    public function update(Request $request, Brand $brand){
        $request->validate([
            'name'=>'required|max:255'
        ]);
        $brand->name=$request->name;
        $brand->description=$request->description;
        //saved on storage/app/public
        //run 'php artisan storage:link' to creates a symbolic link from public/storage to storage/app/public. 
        if($request->hasFile('logo')){
            $logo=$request->file('logo');
            $filename=time().'_'.$logo->getClientOriginalName();
            $path = $logo->storeAs('public/brands', $filename);
            $brand->logo = $filename;

        }
        $brand->save();

        return redirect()->route('brands.index')->with('success', 'Brand updated successfully');

    }

    public function destroy(Brand $brand){
        $brand->delete();
        return redirect()->route('brands.index')->with('success', 'Brand deleted successfully');
    }
}
