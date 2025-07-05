<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
   public function index(Request $request){
    $products = Product::get();
    return view('products.index', compact('products'));
   }
}
 