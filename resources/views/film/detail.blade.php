@extends('layouts.user')

@section('title', $film->judul)

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="{{ asset($film->image) }}" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">{{ $film->judul }}</h1>
                <p class="text-gray-600 mb-4">{{ $film->genre }}</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: {{ $film->durasi }}</span>
                </div>
                <a href="{{ route('pembelian/tiket1') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 max-w-max">Beli Tiket</a>
                <a href="{{ $film->trailer }}" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max" target="_blank">Trailer</a>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>{{ $film->sinopsis }}</p>
        </div>
    </div>
</div>
@endsection
