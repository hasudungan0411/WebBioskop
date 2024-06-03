@extends('layouts.user')

@section('title', 'Pemilihan Kursi')

@section('contents')
<div class="container mx-auto py-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-semibold mb-4">Pemilihan Kursi</h1>
        <p class="text-gray-600 mb-4">Pilih kursi Anda untuk film <strong>Kungfu Panda 4!!</strong><span id="selected-time"></span>.</p>

        <div class="grid grid-cols-8 gap-4">
            <!-- Baris kursi -->
            @for ($row = 'A'; $row <= 'F'; $row++)
                <div class="col-span-8">
                    <div class="flex justify-center mb-4">
                        @for ($seat = 1; $seat <= 7; $seat++)
                            <div class="seat w-10 h-10 border rounded text-center flex items-center justify-center cursor-pointer" data-seat="{{ $row }}{{ $seat }}">
                                {{ $row }}{{ $seat }}
                            </div>
                        @endfor
                    </div>
                </div>
            @endfor
        </div>

        <div class="mt-6">
            <button id="confirm-seats" class="bg-blue-500 text-white px-4 py-2 rounded">Konfirmasi Kursi</button>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const selectedTime = new URLSearchParams(window.location.search).get('time');
    document.getElementById('selected-time').textContent = selectedTime;

    const seats = document.querySelectorAll('.seat');
    let selectedSeats = [];

    seats.forEach(seat => {
        seat.addEventListener('click', () => {
            const seatNumber = seat.dataset.seat;
            if (seat.classList.contains('bg-green-500')) {
                seat.classList.remove('bg-green-500');
                seat.classList.add('bg-white');
                selectedSeats = selectedSeats.filter(s => s !== seatNumber);
            } else {
                seat.classList.remove('bg-white');
                seat.classList.add('bg-green-500');
                selectedSeats.push(seatNumber);
            }
        });
    });

    document.getElementById('confirm-seats').addEventListener('click', () => {
        if (selectedSeats.length === 0) {
            alert('Silakan pilih kursi terlebih dahulu.');
            return;
        }

        // Kirim kursi yang dipilih ke server
        fetch("{{ route('pembelian.konfirmasi') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                time: selectedTime,
                seats: selectedSeats
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "{{ route('pembelian.sukses') }}";
            } else {
                alert('Terjadi kesalahan saat mengonfirmasi kursi.');
            }
        });
    });
});
</script>
@endsection
