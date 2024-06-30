<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\movie;
use App\Models\Seat;

class addseat extends Seeder
{
    public function run()
    {
        // Dapatkan semua showtime yang ada
        $movies = Movie::all();

        // Definisikan kursi yang ingin Anda tambahkan
        $seatNumbers = [
            'A1', 'A2', 'A3', 'A4', 'A5', 
            'B1', 'B2', 'B3', 'B4', 'B5', 
            'C1', 'C2', 'C3', 'C4', 'C5', 
            'D1', 'D2', 'D3', 'D4', 'D5',
            'E1', 'E2', 'E3', 'E4', 'E5', 
            'F1', 'F2', 'F3', 'F4', 'F5', 
            // Tambahkan lebih banyak kursi sesuai kebutuhan
        ];

        foreach ($movies as $movie) {
            foreach ($seatNumbers as $seatNumber) {
                // Cek apakah kursi sudah ada
                $existingSeat = Seat::where('movie_id', $movie->id)
                                    ->where('seat_number', $seatNumber)
                                    ->first();
                if (!$existingSeat) {
                    // Tambahkan kursi jika belum ada
                    Seat::create([
                        'movie_id' => $movie->id,
                        'seat_number' => $seatNumber,
                        'is_reserved' => false,
                    ]);
                }
            }
        }
    }
}
