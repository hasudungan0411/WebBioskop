<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class upcomingcontroller extends Controller
{
    public function upcoming()
    {
        $upcoming = Product::where('kategori', 'upcoming')->get();

        return view('upcoming', compact('upcoming'));
    }


    public function show($id)
    {
        // Ambil data film berdasarkan ID
        $product = Product::findOrFail($id);

        // Pastikan hanya film dengan kategori 'upcoming' yang dapat diakses
        if ($product->kategori !== 'upcoming') {
            abort(404); // Tampilkan halaman 404 jika film tidak termasuk dalam 'upcoming'
        }

        // Tampilkan view 'upcoming_show' dengan data film
        return view('upcomingfilm', compact('product'));
    }
}
