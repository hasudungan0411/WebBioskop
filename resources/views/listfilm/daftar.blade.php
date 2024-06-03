@extends('layouts.app')

@section('title', 'Daftar Film')

@section('contents')
<div class="bg-blue-100 p-6">
    <h1 class="font-bold text-2xl text-center">Daftar Film</h1>
    <hr class="border-t-2 border-black my-4">
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-blue-200 p-4 rounded-md">
        <a href="{{ route('admin/listfilm/coming') }}">
            <h2 class="font-semibold text-lg mb-2">Up Coming</h2>
            <div class="flex items-center justify-center mb-4">
                    <img src="/images/ikoncoming.png" alt="Upcoming Film" class="h-40 w-40 text-gray-600">
                </a>
            </div>
        </div>

        <div class="bg-blue-200 p-4 rounded-md">
        <a href="{{ route('admin/listfilm/playing') }}">
            <h2 class="font-semibold text-lg mb-2">Now Playing</h2>
            <div class="flex items-center justify-center mb-4">
                    <img src="/images/ikonplaying.png" alt="Now Playing Film" class="h-40 w-40 text-blue-600">
                </a>
            </div>
        </div>
    </div>
</div>
@endsection