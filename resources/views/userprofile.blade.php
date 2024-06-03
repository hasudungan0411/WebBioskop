@extends('layouts.user')
 
@section('title', 'Profile Settings User')
 
@section('contents')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<header>
    @include('components.header')
</header>

<hr />
<form method="POST" enctype="multipart/form-data" action="{{route ('userprofile.update') }}">
    @csrf
    <div class="w-full bg-gray-300 rounded-lg shadow dark:border md:mt-10 sm:max-w-md xl:p-1 dark:bg-gray-800 dark:border-gray-700 mx-auto" >
    <div class="p-6 space-y-4 md:space-y-5 sm:p-20">
        <div class="flex items-center mb-5 text-5xl font-semibold text-gray-900 dark:text-white">
            <img src="images/logo.png" alt="G2" class="h-20 w-auto" >
            <span class="text-decoration">FilmFlix</span>
        </div>
    <div>
        <label class="label">
            <span class="text-base label-text">Name</span>
        </label>
        <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full input input-bordered" />
    </div>
    <div>
        <label class="label">
            <span class="text-base label-text">Email</span>
        </label>
        <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full input input-bordered" />
    </div>
    <div class="mt-6 text-center">
        <button type="submit" class="btn btn-block hover:bg-blue-500">Save Profile</button>
    </div>
</form>
@endsection

