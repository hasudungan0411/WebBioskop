@extends('layouts.app')

@section('title', 'Edit Film')

@section('contents')
<h1 class="mb-0 font-bold text-2xl">Edit Film</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Judul</label>
                <div class="mt-2">
                    <input type="text" name="judul" id="judul" value="{{ $product->judul }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('judul'))
                        <span class="text-red-500 text-sm">{{ $errors->first('judul') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Genre</label>
                <div class="mt-2">
                    <input id="genre" name="genre" type="text" value="{{ $product->genre }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('genre'))
                        <span class="text-red-500 text-sm">{{ $errors->first('genre') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Durasi</label>
                <div class="mt-2">
                    <input id="durasi" name="durasi" type="text" value="{{ $product->durasi }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('durasi'))
                        <span class="text-red-500 text-sm">{{ $errors->first('durasi') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Harga</label>
                <div class="mt-2">
                    <input id="harga" name="harga" type="text" value="{{ $product->harga }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('harga'))
                        <span class="text-red-500 text-sm">{{ $errors->first('harga') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Kategori</label>
                <div class="mt-2">
                    <select id="kategori" name="kategori" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <option value="" disabled>Pilih!!!</option>
                        <option value="upcoming" {{ $product->kategori == 'upcoming' ? 'selected' : '' }}>Up Coming</option>
                        <option value="now playing" {{ $product->kategori == 'now playing' ? 'selected' : '' }}>Now Playing</option>
                    </select>
                    @if ($errors->has('kategori'))
                        <span class="text-red-500 text-sm">{{ $errors->first('kategori') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Trailer</label>
                <div class="mt-2">
                    <input id="trailer" name="trailer" type="text" value="{{ $product->trailer }}" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    @if ($errors->has('trailer'))
                        <span class="text-red-500 text-sm">{{ $errors->first('trailer') }}</span>
                    @endif
                </div>
            </div>

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                <div class="mt-2">
                    <input id="image" name="image" type="file" accept="image/*"
                           class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                @if ($product->image)
                    <img src="{{ asset('images/' . $product->image) }}" class="w-50 mt-2 mb-2 border p-1" alt="Current Image">
                @endif
            </div>
            

            <div class="sm:col-span-4">
                <label class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <textarea name="description" placeholder="Description" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $product->description }}</textarea>
                    @if ($errors->has('description'))
                        <span class="text-red-500 text-sm">{{ $errors->first('description') }}</span>
                    @endif
                </div>
            </div>

            <button type="submit" class="flex w-full justify-center mt-10 rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
        </form>
    </div>
</div>
@endsection
