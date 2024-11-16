<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function home() {
        $product = Product::get();
        // dd($product);
        return view('product.home', compact('product'));
    }

    function tambah() {
        return view('product.tambah');
    }

    function submit(Request $request) {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->save();
        
        return redirect()->route('product.home');
    }


}
