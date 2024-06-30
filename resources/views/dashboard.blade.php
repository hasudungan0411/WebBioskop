<!-- resources/views/admin/home.blade.php -->

@extends('layouts.app')

@section('title', 'Home Admin')

@section('contents')
<div>
    <h1 class="font-bold text-2xl ml-3 text-center">Riwayat Pembelian Tiket</h1>
    <hr class="border-t-2 border-black my-4">
    <div class="bg-blue-200 p-10 mt-4 h-full">
        @if($transactions->isEmpty())
            <p class="text-center">Belum ada pembelian tiket.</p>
        @else
            <table class="w-full border-collapse border border-blue-800">
                <thead>
                    <tr>
                        <th class="border border-blue-800 p-2">#</th>
                        <th class="border border-blue-900 p-2">Nama Film</th>
                        <th class="border border-blue-800 p-2">Lokasi Mall</th>
                        <th class="border border-blue-800 p-2">Studio</th>
                        <th class="border border-blue-800 p-2">Tanggal</th>
                        <th class="border border-blue-800 p-2">Jam</th>
                        <th class="border border-blue-800 p-2">Kursi</th>
                        <th class="border border-blue-800 p-2">Total Harga</th>
                        <th class="border border-blue-800 p-2">Nama Pengguna</th>
                        <th class="border border-blue-800 p-2">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td class="border border-blue-800 p-2">{{ $loop->iteration }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->product->judul }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->movie->mall }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->movie->theater }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->movie->date }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->movie->time }}</td>
                            <td class="border border-blue-800 p-2">
                                <ul>
                                    @foreach($transaction->seats as $seat)
                                        <li>{{ $seat->seat_number }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td class="border border-blue-800 p-2">Rp{{ number_format($transaction->total_price, 0, ',', '.') }}</td>
                            <td class="border border-blue-800 p-2">{{ $transaction->user->name }}</td>
                            <td class="border border-blue-800 p-2">{{ ucfirst($transaction->status) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection
