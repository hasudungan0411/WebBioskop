@extends('layouts.app')

@section('title', 'Show Film')

@section('contents')
<h1 class="font-bold text-2xl ml-3">Detail Film</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
            <div class="mt-2">
                {{ $product->judul }}
            </div>
        </div>

        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Genre</label>
            <div class="mt-2">
                {{ $product->genre }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
            <div class="mt-2">
                {{ $product->harga }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
            <div class="mt-2">
                {{ $product->kategori }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Trailer</label>
            <div class="mt-2">
                <a href="{{ $product->trailer }}" target="_blank">Tonton Trailer</a>
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Image</label>
            <div class="mt-2">
                {{ $product->image }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
                {{ $product->description }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection