@extends('layouts.user')

@section('title', 'Bioskop')

@section('contents')
<div class="container mx-auto py-8 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-data="{ isOpen: false }" class="bg-white shadow-md rounded-lg p-8">
            <div class="flex items-center justify-between">
                <h2 class="text-5xl font-bold">Theaters In Batam</h2>
                <button x-on:click="isOpen = !isOpen" class="text-lg">
                    <i :class="isOpen ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"></i>
                </button>
            </div>
            <ul x-show="isOpen" x-transition class="mt-9 space-y-2 ml-4">
            <h2 class="text-3xl font-semibold mt-9 space-y-5">CINEMA XXI</h2>
                <li><a href="{{ route('mallbioskop/bcs') }}" class="block hover:text-blue-500 font-semibold mt-9">BCS BATAM XXI</a></li>
                <li><a href="#" class="block hover:text-blue-500 font-semibold mt-4">MEGA XXI Batam Centre</a></li>
                <li><a href="#" class="block hover:text-blue-500 font-semibold mt-4">PANBIL MALL XXI</a></li>
                <li><a href="#" class="block hover:text-blue-500 font-semibold mt-4">STUDIO XXI BATAM</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
