@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="/images/film10.1.jpg" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">Mariposa</h1>
                <p class="text-gray-600 mb-4">Drama | Komedi | Romantice</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: 1 jam 58 menit</span>
                </div>
                <a href="{{ route('pembelian/tiket2') }}" class="bg-green-500 text-white px-4 py-2 rounded mb-4 max-w-max">Beli Tiket</a>
                <a href="https://youtu.be/N9PUbRIKYOA?si=CJaRvYq8MWNWcIAs" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max">Trailer</a>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>
                Iqbal (Angga Yunanda) seperti kupu-kupu Mariposa bagi Acha (Adhisty Zara). Tiap kali didekati ia selalu menghindar. Acha bertekad ingin mendapatkan hati Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin.
                Ternyata sikap dingin Iqbal itu tuntutan dari sang ayah yang menginginkannya menang dalam olimpiade sains. Amanda takut Acha akan terluka dan sakit hati. Sekali pun lugu dan polos, tekad Acha sangat kuat. Sahabat Acha, Amanda (Dannia Salsabilla), berusaha mencegah niat Acha untuk mendekati Iqbal.
                Acha mendekati Iqbal dengan berbagai cara. Acha yakin, jika pun hati Iqbal sekeras batu, Acha adalah air yang menetesinya setiap waktu, hingga batu itu akan pecah dan menerima dirinya. Berhasilkah Acha mendapatkan hati Iqbal?
            <p>Tanggal rilis: 12 Maret 2020 (Indonesia)</p>
            <p>Sutradara: Fajar Bustomi</p>
            <p>Penulis: Alim Sudio</p>
            <p>Karakter: Angga Yunanda sebagai Iqbal Guanna Freedy,
                Adhisty Zara sebagai Natasha Kay Loovy (Acha),
                Dannia Salsabilla sebagai Amanda,
                Abun Sungkar sebagai Rian,
                Junior Roberts sebagai Glen,
                Syakir Daulay sebagai Juna,
                Irgi Ahmad Fahrezi sebagai Henry Kusuma,
                Ariyo Wahab sebagai Pak Bov, ayah Iqbal,
                Ersa Mayori sebagai Kirana, ibu Acha,
                Baim sebagai Pak Teddy ayah Acha</p>
            <p>Bahasa: Indonesia</p>
            <p>Penata musik: Andika Trhiadi</p>
            <p>Perusahaan produksi: Falcon Pictures, Starvision</p>
            </p>
        </div>
    </div>
</div>
@endsection