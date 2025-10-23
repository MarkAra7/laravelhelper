<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        $productCount = Product::count();
        return view('products.index', compact('products','productCount'));
    }
    public function root(){
        return redirect()->route('products.index');
    }

    public function create() {
        $productCount = Product::count();
        return view('products.create',compact('productCount'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
        'name' => 'required|unique:products|max:20',
        'quantity' => 'required',
        'description' => 'required',
    ]);
       


        $product = Product::create($validated);
        return redirect()->route('products.show',[$product])->with('status', 'Product Created!')->with('action','Created'); //vai ['product'=>$product]
        // return redirect('/products/' . $product->id);
    }

    public function show(Product $product) {
        $productCount = Product::count();
            return view('products.show', compact('product','productCount'));
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Product Deleted!')->with('action','Deleted');
    }

    public function edit(Product $product) {
        $productCount = Product::count();
        return view('products.edit', compact('product','productCount'));
    }

    public function update(Request $request, Product $product) {

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product->update($data);
       return  redirect()->route('products.show',[$product])->with('status', 'Profile updated!')->with('action','Updated');
        
    }
}
