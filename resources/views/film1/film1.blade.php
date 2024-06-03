@extends('layouts.user')

@section('title', 'Up Coming')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="/images/film4.jpg" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">Perjalanan Pembuktian Cinta</h1>
                <p class="text-gray-600 mb-4">Drama Religi</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: 2 jam 9 menit</span>
                </div>
                <a href="https://youtu.be/3tiDmyqINA8?si=FRPjeo_OitRCgliT" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max">Trailer</a>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>
                    Fathia yang dipaksa menikah menikah dengan Satya namun diam-diam merindukan Raehan, pria biasa yang membawa cinta ke dalam hidupnya.
                    fathia (Dea Annisa), seorang pengabdi pesantren dan penghafal kitab suci, menjalani pernikahan atas paksaan orang tuanya. Ia dinikahkan dengan Satya (Donny Damara) pria beristri yang usianya terpaut jauh darinya. 
                    Padahal, hatinya terpaut pada Raehan (Teuku Ryan) laki-laki biasa yang datang membawa manisnya cinta.
                <p>Tanggal rilis:  7 Maret 2024 (Indonesia)</p>
                <p>Sutradara: Muhammad Amrul Ummami.</p>
                <p>Karakter: Dea Annisa sebagai Fathia, Teuku Ryan sebagai Raehan, Donny Damara sebagai Satya, Yayu AW Unru sebagai Syukron, Elma Theana sebagai Laila
                   Muzaki Ramdhan sebagai Razak, Ananta Rispo sebagai Dito, Dzawin sebagai Hilman, Vonny Anggraini sebagai Helen, Natasya Nurhalimah sebagai Amel</p>
                <p>Bahasa: Indonesia</p>
                <p>Perusahaan produksi: FMM Studios, PPA Institute dan Pejuang Subuh</p>
            </p>
        </div>
    </div>
</div>
@endsection