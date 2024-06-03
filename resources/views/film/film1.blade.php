@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="/images/film1.jpg" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">Kungfu Panda 4</h1>
                <p class="text-gray-600 mb-4">Animation | Action | Adventure</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: 1 jam 34 menit</span>
                </div>
                <a href="{{ route('pembelian/tiket1')}}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 max-w-max">Beli Tiket</a>
                <a href="https://youtu.be/_inKs4eeHiI?si=wMw_4UAkAKgagI-I" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max">Trailer</a>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>
                Kung Fu Panda 4 adalah film animasi komedi bela diri Amerika Serikat tahun 2024 yang diproduseri oleh DreamWorks Animation dan didistribusikan oleh Universal Pictures. Film ini ialah seri keempat dalam waralaba Kung Fu Panda sekaligus sekuel dari Kung Fu Panda 3.
                <p>Tanggal rilis: 3 Maret 2024 (Indonesia)</p>
                <p>Sutradara: Mike Mitchell</p>
                <p>Karakter: Po, Zhen, Master Shifu, Tai Lung, The Chameleon, Granny Boar, Captain Fish, Scott, Mr. Ping, Li Shan, Han</p>
                <p>Bahasa: Inggris</p>
                <p>Penata musik: Hans Zimmer; Steve Mazzaro</p>
                <p>Perusahaan produksi: DreamWorks Animation</p>
            </p>
        </div>
    </div>
</div>
@endsection