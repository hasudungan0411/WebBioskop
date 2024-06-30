<!DOCTYPE html>
<html>
<head>
    <title>Tiket Elektronik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .ticket-info {
            background-color: #f0f0f0;
            padding: 50px;
            margin-bottom: 50px;
        }
        .ticket-info p {
            margin: 10px 0;
        }
        .ticket-info h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="ticket-info">
            <h2>Film-> "{{ $product->judul }}"</h2>
            <p>Lokasi Mall-> {{ $movie->mall }}</p>
            <p>Studio-> {{ $movie->theater }}</p>
            <p>Tanggal Tayang-> {{ $movie->date }} </p>
            <p>Jam Tayang-> {{ $movie->time }}</p>
            <p>Kursi yang Dipilih:</p>
            <ul>
                @foreach ($transaction->seats as $seat)
                    <li>{{ $seat->seat_number }}</li>
                @endforeach   
            </ul>
            <p>Harga Total: Rp{{ number_format($transaction->total_price, 0, ',', '.') }}</p>
            <h5>Scan barcode dibawah ini untuk mendapatkan Tiket dilokasi Mall </h5>
            <img src="images/barcode.jpeg" alt="barcode" style="width: 250px; height: auto;">
            {{-- <p>Status Pembayaran: {{ ucfirst($transaction->status) }}</p> --}}
            
        </div>
    </div>
</body> 
</html>
