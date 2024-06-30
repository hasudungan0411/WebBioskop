<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Transaction;
 
class HomeController extends Controller
{
   
 
    public function index()
    {
        // Ambil data film dari database
        $nowPlaying = Product::where('kategori', 'now playing')->get();

        
        // Tampilkan view 'home' dan teruskan data film ke dalam view
        return view('home', compact('nowPlaying'));
    }

   
    
    public function adminHome()
    {
        $transactions = Transaction::with('user', 'movie', 'seats', 'product')->get();

        return view('dashboard', compact('transactions'));
    }

    public function tiket()
    {
        return view('tiket');
    }
}