<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\movie;
 
class Product extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'judul',
        'genre',
        'durasi',
        'harga',
        'kategori',
        'trailer',
        'image',
        'description'
    ];

    public function movies()
    {
        return $this->hasMany(Movie::class, 'movie_title', 'judul');
    }

}