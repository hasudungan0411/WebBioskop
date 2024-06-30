<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id', 'seat_number', 'is_reserved'
    ];

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function transactions()
    {
        return $this->belongsToMany(Transaction::class, 'seat_transaction', 'seat_id', 'transaction_id')
            ->withTimestamps();
    }


}
