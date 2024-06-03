@extends('layouts.user')

@section('title', 'BCS Batam')

@section('contents')
<div class="container mx-auto py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg p-8">
            <h2 class="text-2xl font-semibold mb-4">BCS Batam</h2>
            <p>
                Batam City Square (BCS) adalah salah satu mal terbesar di Batam. Lokasinya terletak di 
                Jalan Bunga Raya, Lubuk Baja Kota, Kecamatan Lubuk Baja, Kota Batam, Kepulauan Riau.
            </p>
            
            <h3 class="text-xl font-semibold mt-6">Harga Tiket XXI</h3>
            <ul class="list-disc ml-4 mt-2">
                <li>Hari Senin - Kamis: Rp 35.000</li>
                <li>Hari Jumat: Rp 40.000</li>
                <li>Hari Sabtu - Minggu: Rp 50.000</li>
            </ul>

            <h3 class="text-xl font-semibold mt-6">Peta Lokasi</h3>
            <div class="mt-4">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.1291632386167!2d104.01443767489357!3d1.1372576595872582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989f6a82590cf%3A0x40a0cd58bdc6d589!2sBCS%20Mall%20Batam!5e0!3m2!1sid!2sid!4v1635838848932!5m2!1sid!2sid" 
                    width="100%" 
                    height="400" 
                    frameborder="0" 
                    style="border:0;" 
                    allowfullscreen 
                    aria-hidden="false" 
                    tabindex="0">
                </iframe>
            </div>
        </div>
    </div>
</div>
@endsection
