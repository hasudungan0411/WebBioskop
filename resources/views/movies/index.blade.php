@extends('layouts.app')

@section('title', 'Manage movies')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3">Manage Film</h1>
    <a href="{{ route('movies.create') }}" class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Showtime Film</a>
    <hr />

    @if(session('success'))
    <div class="bg-green-200 text-green-800 py-2 px-4 mb-4 rounded">
        {{ session('success') }}
    </div>
    @endif

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Date</th>
                <th scope="col" class="px-6 py-3">Time</th>
                <th scope="col" class="px-6 py-3">Movie Title</th>
                <th scope="col" class="px-6 py-3">Mall</th>
                <th scope="col" class="px-6 py-3">Studio</th>
                <th scope="col" class="px-6 py-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)
            <tr class="border-b bg-white dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">{{ $index + 1 }}</td>
                <td class="px-6 py-4">{{ $movie->date }}</td>
                <td class="px-6 py-4">{{ $movie->time }}</td>
                <td class="px-6 py-4">{{ $movie->movie_title }}</td>
                <td class="px-6 py-4">{{ $movie->mall }}</td>
                <td class="px-6 py-4">{{ $movie->theater }}</td>
                <td class="px-6 py-4">
                    <a href="{{ route('movies.edit', $movie->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
