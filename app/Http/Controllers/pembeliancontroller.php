<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class pembeliancontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Middleware untuk cek autentikasi
    }
    
    public function tiket1()
    {
        return view('pembelian/tiket1');
    }

    public function konfirmasi(Request $request) {
        $time = $request->input('time');
        $seats = $request->input('seats');
        
        // Logika untuk menyimpan kursi yang dipilih ke database atau sesi
    
        return response()->json(['success' => true]);
    }
    
    public function sukses() {
        return view('pembelian.sukses');
    }
    

    public function tiket2()
    {
        return view('pembelian/tiket2');
    }

    public function beli()
    {
        return view('pembelian/beli');
    }

    public function confirm()
    {
        return view('pembelian/confirbeli');
    }

    public function show($productId)
    {
        // Ambil detail produk berdasarkan ID
        $product = Product::findOrFail($productId);

        // Tampilkan halaman pembelian tiket dengan detail produk
        return view('pembelian.show', compact('product'));
    }

    public function store(Request $request, $productId)
    {
        // Validasi dan proses data pembelian
        $request->validate([
            'quantity' => 'required|integer|min=1',
            // Tambahkan aturan validasi lain jika diperlukan
        ]);

        // Logika penyimpanan pembelian tiket di sini
        // Contohnya, Anda bisa menyimpan ke tabel orders atau transactions

        // Redirect ke halaman sukses atau halaman lain dengan pesan sukses
        return redirect()->route('pembelian.sukses');
    }
}
