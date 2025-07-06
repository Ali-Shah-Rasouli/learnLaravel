<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Http\Controllers\ProductController;

class ProductController extends Controller
{
   public function index(Request $request){
    $products = Product::get();
    return view('products.index', compact('products'));
   }

   public function create(Request $request){
      return view('products.create'); 
    }

   public function store(Request $request){
      $request->validate(["name" => "required", "details"=> "required"]);

      Product::create(["name"=>$request->name, "details"=>$request->details]);

      return redirect()->route('products.index')->with('success', 'product added successfully');
    }
public function show(Request $request, $id){
   $product=Product::find($id);
      return view('products.show', compact('product')); 
    }



    
}
 