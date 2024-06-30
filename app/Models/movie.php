<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Seat;

class movie extends Model
{
    use HasFactory;

    protected $fillable = ['movie_title', 'date', 'time', 'mall', 'theater'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function seats()
    {
        return $this->hasMany(seat::class);
    }
}
