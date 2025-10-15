<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
        'name' => 'required|unique:products|max:20',
        'quantity' => 'required',
        'description' => 'required',
    ]);
       


        $product = Product::create($validated);
        return redirect()->route('products.show',[$product])->with('status', 'Product Created!'); //vai ['product'=>$product]
        // return redirect('/products/' . $product->id);
    }

    public function show(Product $product) {
            return view('products.show', compact('product'));
    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('status', 'Product Delete!');
    }

    public function edit(Product $product) {
        
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product) {

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product->update($data);
       return  redirect()->route('products.show',[$product])->with('status', 'Profile updated!');
        
    }
}
