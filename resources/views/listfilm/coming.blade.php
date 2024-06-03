@extends('layouts.app')
 
@section('title', 'Up Coming')
 
@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3 text-center">Up Coming</h1>
    <hr class="border-t-2 border-black my-4">
    <div class="bg-blue-200 p-6 mt-4">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Judul</th>
                    <th scope="col" class="px-6 py-3">Genre</th>
                    <th scope="col" class="px-6 py-3">Harga</th>
                    <th scope="col" class="px-6 py-3">Kategori</th>
                    <th scope="col" class="px-6 py-3">Trailer</th>
                    <th scope="col" class="px-6 py-3">Image</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel di sini -->
            </tbody>
        </table>
    </div>
</div>

@endsection