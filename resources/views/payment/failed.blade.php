// resources/views/payment/failed.blade.php
@extends('layouts.user')

@section('title', 'Pembayaran Gagal')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-semibold mb-4">Pembayaran Gagal</h1>
        <p>Maaf, pembayaran Anda gagal. Silakan coba lagi atau hubungi layanan pelanggan.</p>
        <a href="/" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Kembali ke Beranda</a>
    </div>
</div>
@endsection
