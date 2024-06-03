<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
