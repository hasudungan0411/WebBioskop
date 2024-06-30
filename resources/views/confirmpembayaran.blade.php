@extends('layouts.user')

@section('title', 'Konfirmasi Pembayaran')

@section('contents')
    <div class="container mx-auto py-6">
        <div class="bg-white p-8 rounded-lg shadow-md">
            <div class="flex flex-wrap item-start mt-4">
                <div class="w-full md:w-1/2 lg:w-1/3">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->judul }}"
                        class="w-full h-auto rounded-lg">
                </div>
                <div class="w-full md:w-1/2 lg:w-2/3 pl-6 flex flex-col justify-start">
                    <h1 class="text-3xl font-semibold mb-2">{{ $product->judul }}</h1>
                    <p class="mt-4">Lokasi Mall -> {{ $movie->mall }} </p>
                    <p class="mt-2">Tanggal Tayang -> {{ $movie->date }}</p>
                    <p class="mt-2">Jam Tayang -> {{ $movie->time }}</p>
                    <p class="mt-2">Studio -> {{ $movie->theater }}</p>
                    <p class="mt-2">Kursi yang Dipilih:</p>
                    <ul>
                        @foreach ($seats as $seat)
                            <li>{{ $seat->seat_number }}</li>
                        @endforeach
                    </ul>
                    <p class="mt-7 font-semibold">Harga Total: Rp{{ number_format($transaction->total_price, 0, ',', '.') }}</p>

                    <button id="pay-button" onclick="midtrans()"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded max-w-xs mt-4">Bayar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
    <script type="text/javascript">
        function midtrans() {
            console.log('test');
            snap.pay('{{ $transaction->snap_token }}', {
                onSuccess: function(result) {
                    alert('Pembayaran Berhasil');
                    console.log(result);
                    window.location.href =
                        "/payment/success/{{ $transaction_id }}"; // Redirect ke halaman sukses
                },
                onPending: function(result) {
                    alert('Pembayaran Tertunda');
                    console.log(result);
                },
                onError: function(result) {
                    alert('Pembayaran Gagal');
                    console.log(result);
                    window.location.href = "/payment/error"; // Redirect ke halaman error
                }
            });
            $(document).ready(function() {
                $('.seat').prop('disabled', true);
            });
        };
    </script>
@endsection
