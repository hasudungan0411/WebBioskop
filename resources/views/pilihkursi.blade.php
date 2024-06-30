<!-- resources/views/pembelian/pilihkursi.blade.php -->

@extends('layouts.user')

@section('title', 'Pilih Kursi')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">Pilih Kursi</h1>
        <p class="text-gray-600 mb-4">Film: {{ $product->judul }}</p>
        <p class="text-gray-600 mb-4">Tempat dan jam tayang: {{ $movie->mall }} {{ $movie->date }} - {{ $movie->time }}</p>

        <!-- Tabel Kursi -->
        <form id="seatSelectionForm" action="{{ route('prosespembayaran') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="hidden" name="movie_id" value="{{ $movie->id }}">
            <input type="hidden" name="selected_seats" id="selectedSeats">

            <div class="grid grid-cols-5 gap-6">
                @foreach($seats as $seat)
                    <div class="p-2 border rounded {{ $seat->is_reserved ? 'bg-gray-300 cursor-not-allowed' : 'bg-green-200' }}">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" class="seat-checkbox" value="{{ $seat->seat_number }}" {{ $seat->is_reserved ? 'disabled' : '' }}>
                            <span>{{ $seat->seat_number }}</span>
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Proses Pembayaran
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('seatSelectionForm').addEventListener('submit', function(event) {
        // Kumpulkan kursi yang dipilih
        let selectedSeats = [];
        document.querySelectorAll('.seat-checkbox:checked').forEach(function(checkbox) {
            selectedSeats.push(checkbox.value);
        });
        if (selectedSeats.length === 0) {
            alert('Pilih setidaknya satu kursi');
            event.preventDefault(); 
        }
        // Simpan kursi yang dipilih di input hidden
        document.getElementById('selectedSeats').value = selectedSeats.join(',');

        
    });
</script>
@endsection
