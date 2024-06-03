@extends('layouts.user')

@section('title', 'Up Coming')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex flex-wrap items-start">
            <div class="w-full md:w-1/2 lg:w-1/3">
                <img src="/images/film9.1.jpeg" alt="Film Poster" class="w-full h-auto rounded-lg">
            </div>
            <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                <h1 class="text-3xl font-semibold mb-2">Kalian Pantas Mati</h1>
                <p class="text-gray-600 mb-4">Horor</p>
                <div class="flex items-center text-gray-600 mb-4">
                    <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 1.5" />
                        <circle cx="12" cy="12" r="10" />
                    </svg>
                    <span>Durasi: 1 jam 47 menit</span>
                </div>
                <a href="https://www.youtube.com/watch?v=QeltDNKIQCs" class="bg-blue-500 text-white px-4 py-2 rounded max-w-max">Trailer</a>
            </div>
        </div>
        <div class="mt-6 bg-gray-300 p-5">
            <h2 class="text-xl font-semibold">Sinopsis</h2>
            <p>
                Kisah Rakka (Emir Mahira) yang terlahir indigo. Ia pun dapat berkomunikasi dengan roh orang yang sudah meninggal.
                Kemampuan itu pun membuat Rakka merasa terbebani dan kerap membuatnya di-bully di sekolah.Suatu hari, Rakka memutuskan pindah dari Jakarta ke Jonggol, Bogor, kampung halamannya untuk hidup bersama sang paman, Ajat (Randhika Djamil).
                Ajat sendiri diketahui juga memiliki kemampuan yang sama dengan Rakka. Ia kemudian bersekolah di SMA Sumpah Pemuda Jonggol Bogor.Di Jonggol, Rakka harus berhadapan dengan sosok arwah jahat.
                Hantu itu juga yang membuat beberapa teman sekolah Rakka menghilang secara misterius. Rakka pun terpaksa menggunakan kemampuannya untuk mencari tahu alasan di balik teror arwah yang penuh dendam ini.
                Namun, di saat yang bersamaan ia juga bertekad membantu hantu cantik bernama Dini (Zee JKT48) untuk mengembalikan ingatannya</p>
            <p>Sutradara: Ginanti Rona.</p>
            <p>Tanggal rilis: 13 Oktober 2022 (Indonesia)</p>
            <p>Karakter: Zee JKT48 sebagai Dini / Windy,
                Graciella Abigail sebagai Dini kecil,
                Emir Mahira sebagai Rakka,
                Kemas Keizio sebagai Rakka kecil,
                Andrew Barrett sebagai Dodit,
                Ghaza Alhabsy sebagai Dodit kecil.</p>
            <p>Bahasa: Indonesia</p>
            <p>Perusahaan produksi: FIdeosource Entertainment,
                Newko Global Entertainment,
                Paragon Pictures,
                Anami Films,
                IDS,
                WME Independent.</p>
            </p>
        </div>
    </div>
</div>
@endsection