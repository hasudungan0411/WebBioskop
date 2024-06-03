@extends('layouts.app')

@section('title', 'Profile Admin')

@section ('contents')
<header class="bg-white shadow mx-auto mb-7">
    <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-2">
        <h1 class="text-3xl font-bold text-gray-900 text-left" >
            Profile Admin
        </h1>
    </div>
</header>
<div class="flex flex-wrap justify-center items-center">
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/zanda.jpeg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">Mazanda Agriani</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/rian.jpeg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">Rian Hasudungan</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/faron.jpeg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">M.Faron Fauzi</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
</div>
<div class="flex flex-wrap justify-center items-center">
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/valuk.jpg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">Valuhk Januarta</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/farel.jpeg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">Muhammad Farrel</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
    <div class="flex flex-col items-center mr-40 mb-40">
        <img src="/images/habil.jpeg" alt="Profile" class="h-40 w-40 rounded-full mb-2">
        <span class="text-sm font-bold">Habil Mushani</span>
        <span class="text-xs text-gray-700">admin@gmail.com</span>
    </div>
</div>

@endsection
