<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        return view('products.index', ['allProducts' => $products]);
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product = Product::create($data);
        return redirect()->route('product.show', ['product' => $product->id]);
    }

    public function show(Product $product) {
        return view('products.show', ['singleProduct' => $product]);
    }

    public function destroy($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }

    public function edit(Product $product) {
        return view('products.edit', ['singleProduct' => $product]);
    }

    public function update(Request $request, Product $product) {

        $data = [
            'name' => $request->name,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ];

        $product->update($data);
        return redirect()->route('product.show', ['product' => $product->id]);
    }
}
