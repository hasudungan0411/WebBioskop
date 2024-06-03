@extends('layouts.user')

@section('title', 'Pembelian Berhasil')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md text-center">
        <h1 class="text-3xl font-semibold mb-4">Pembelian Berhasil</h1>
        <p class="text-gray-600 mb-4">Terima kasih telah membeli tiket. Nikmati film Anda!</p>
        <a href="{{ route('home') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Kembali ke Beranda</a>
    </div>
</div>
@endsection
