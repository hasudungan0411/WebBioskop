<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // Validation logic
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|in:upcoming,now playing',
            'trailer' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // File upload logic
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        // Create new product record in the database
        $product = Product::create($validatedData);

        // Redirect to a success page or route
        return redirect()->route('products.index')->with('success', 'berhasil menambahkan film');
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'durasi' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|in:upcoming,now playing',
            'trailer' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable|string',
        ]);

        // Handle image upload if necessary
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $validatedData['image'] = $imageName;
        }

        $product->update($validated);

        return redirect()->route('products.index')->with('success', 'Film Berhasil diupdate.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Film Berhasil di Hapus.');
    }
}
