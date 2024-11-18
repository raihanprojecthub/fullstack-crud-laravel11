<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function home() {
        $product = Product::get();
        // dd($product);
        return view('home', compact('product'));
    }

    function tambah() {
        return view('product.tambah');
    }

    function submit(Request $request) {
        $product = new Product();
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->save();
        
        return redirect()->route('home');
    }

    function edit($id) {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    function update(Request $request, $id) {
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->update();

        return redirect()->route('home');
    }

    function delete($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('home');
    }

}
