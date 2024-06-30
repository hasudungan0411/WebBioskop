<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'movie_id',
        'total_price',
        'snap_token',
        'status',
    ];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi ke Movie
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    // Relasi many-to-many ke Seat melalui tabel pivot transaction_seat
    public function seats()
    {
        return $this->belongsToMany(Seat::class, 'transaction_seat', 'transaction_id', 'seat_id')
            ->withTimestamps();
    }

    
}
