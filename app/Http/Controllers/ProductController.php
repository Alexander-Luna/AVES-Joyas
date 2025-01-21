<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['inventory', 'images'])->get();
        return view('product.index', compact('products'));
    }
    public function show($id)
    {
        $product = Product::find($id)->get();
        return view('product.index', compact('product'));
    }
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para imágenes
        ]);

        $product = Product::create($request->only('name', 'description'));

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                ProductImage::create([
                    'product_id' => $product->id,
                    'path' => $path,
                ]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
    }
}
