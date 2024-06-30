<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\Product;

class moviecontroller extends Controller
{
    public function index()
    {
        $movies = movie::all();
        return view('movies.index', compact('movies'));
    }

    public function create()
    {
        $products = Product::all();

        return view('movies.create', compact('products'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'movie_title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'mall' => 'required|string|max:255',
            'theater' => 'required|string|max:255',
        ]);

        $movie = movie::create($validatedData);

        return redirect()->route('movies.index')->with('success', 'movie created successfully.');
    }

    public function edit($id)
    {
        $movie = movie::find($id);
        $products = Product::all();

        return view('movies.edit', compact('movie', 'products'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'movie_title' => 'required|string|max:255',
            'date' => 'required|date',
            'time' => 'required',
            'mall' => 'required|string|max:255',
            'theater' => 'required|string|max:255',
        ]);

        $movie = movie::find($id);
        $movie->update($request->all());

        return redirect()->route('movies.index')
            ->with('success', 'movie updated successfully');
    }

    public function show($id)
    {
        // Cari film berdasarkan ID
        $movie = Product::findOrFail($id);

        // Tampilkan view detail film dan teruskan data film
        return view('movies.show', compact('movie'));
    }

    public function destroy($id)
    {
        $movie = movie::find($id);
        $movie->delete();

        return redirect()->route('movies.index')
            ->with('success', 'movie deleted successfully');
    }
}
