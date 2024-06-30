<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Movie;
use App\Models\Seat;

class pilihkursiController extends Controller
{
    // Menampilkan halaman pemilihan kursi
    public function show($productId, $movieId)
    {
        $product = Product::findOrFail($productId);
        $movie = Movie::findOrFail($movieId);

        // Mengambil semua kursi yang ada untuk film ini
        $seats = Seat::where('movie_id', $movieId)->get();

        return view('pilihkursi', compact('product', 'movie', 'seats'));
    }

    
}
