<?php

namespace App\Observers;

use App\Models\Movie;
use App\Models\Seat;

class MovieObserver
{
    /**
     * Handle the Movie "created" event.
     *
     * @param  \App\Models\Movie  $movie
     * @return void
     */
    public function created(Movie $movie)
    {
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

        // Loop melalui kursi dan tambahkan ke database
        foreach ($seatNumbers as $seatNumber) {
            Seat::create([
                'movie_id' => $movie->id,
                'seat_number' => $seatNumber,
                'is_reserved' => false,
            ]);
        }
    }
}
