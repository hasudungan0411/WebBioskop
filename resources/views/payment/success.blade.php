@extends('layouts.user')

@section('title', 'Pembayaran Berhasil')

@section('contents')
<div class="container mx-auto py-10">
    <div class="bg-white p-52 rounded-lg shadow-md">
        <h1 class="text-4xl font-bold mb-6 text-center">Pembayaran Berhasil!!</h1>
        
        <div class="mt-10 text-center">
            <a href="{{ route('generate.ticket', ['id_transaction' => $id_transaction]) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-4 px-6 rounded">
                Unduh Tiket</a>
            <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded">Kembali ke Beranda</a>
        </div>
    </div>
</div>
@endsection
