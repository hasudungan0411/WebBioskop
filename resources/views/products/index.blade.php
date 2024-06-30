@extends('layouts.app')

@section('title', 'Home Film List')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Home Film List</h1>
    <a href="{{ route('products.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add New Film</a>
    <hr />
    @if(Session::has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Judul</th>
                <th scope="col" class="px-6 py-3">Genre</th>
                <th scope="col" class="px-6 py-3">Durasi</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Kategori</th>
                <th scope="col" class="px-6 py-3">Trailer</th>
                <th scope="col" class="px-6 py-3">Image</th>
                <th scope="col" class="px-6 py-3">Description</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($products->count() > 0) <!-- Menggunakan 'products' sesuai variabel dari controller -->
            @foreach($products as $rs)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->iteration }}
                </th>
                <td class="px-6 py-3">
                    {{ $rs->judul }}
                </td>
                <td class="px-6 py-3">
                    {{ $rs->genre }}
                </td>
                <td class="px-6 py-3">
                    {{ $rs->durasi }} <!-- Pastikan durasi ditampilkan -->
                </td>
                <td class="px-6 py-3">
                    {{ $rs->harga }}
                </td>
                <td class="px-6 py-3">
                    @if($rs->kategori == 'upcoming')
                    Upcoming
                    @elseif($rs->kategori == 'now playing')
                    Now Playing
                    @else
                    {{ $rs->kategori }}
                    @endif
                </td>
                <td class="px-6 py-3">
                    @if($rs->trailer)
                    <a href="{{ $rs->trailer }}" target="_blank">Tonton Trailer</a>
                    @else
                    N/A
                    @endif
                </td>
                <td class="px-6 py-3">
                    <a href="{{ asset('images/' . $rs->image) }}" target="_blank">Buka Disini</a>
                </td>
                <td class="px-6 py-3">
                    {{ $rs->description }}
                </td>
                <td class="px-6 py-3 w-36">
                    <div class="h-14 pt-5">
                        <a href="{{ route('products.edit', $rs->id)}}" class="text-green-800 pl-2">Edit</a> |
                        <form action="{{ route('products.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('apakah anda yakin ingin menghapus film?')" class="inline text-red-800">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="10">Film not found</td> 
            </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
