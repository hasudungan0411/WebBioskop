<!-- resources/views/products/upcoming_show.blade.php -->

@extends('layouts.user')

@section('title', $product->judul)

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="{{ asset('images/'.$product->image) }}" alt="{{ $product->judul }}" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">{{ $product->judul }}</h1>
                <p class="text-gray-600 mb-4">{{ $product->genre }}</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: {{ $product->durasi }}</span>
                </div>
                <!-- Tombol Beli Tiket dihapus di sini -->
                <a href="{{ $product->trailer }}" target="_blank" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max">Trailer</a>

                <!-- Tambahkan harga dan kategori di sini -->
                <div class="mt-4">
                    <p><strong>Harga:</strong> Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
                    <p><strong>Kategori:</strong> {{ $product->kategori }}</p>
                </div>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5 rounded-lg">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>{{ $product->description }}</p>
        </div>
    </div>
</div>
@endsection
