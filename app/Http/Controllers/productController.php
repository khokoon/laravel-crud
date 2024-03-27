<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class productController extends Controller
{
    //

    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        //validation.
        $request->validate([
            'name'=> 'required',
            'description'=> 'required',
            'image'=> 'required|mimes:png,jpg,jpeg,gif|max:1000'
        ]);






       // dd($request->all());
       //image file upload.
       $imageName = time().'.'.$request->image->extension();
       $request->image->move(public_path('products'), $imageName);

       //store in database.
       $product = new Product; //object of Model
       $product->image = $imageName;
       $product->name = $request->name;
       $product->description = $request->description;
       $product->save();
       return back();


       //dd($imageName);
    }
}
