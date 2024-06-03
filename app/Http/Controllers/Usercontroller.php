<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function userprofile()
    {
        return view('userprofile');
    }

    public function update(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Perbarui data profil pengguna
        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        
        
        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('userprofile')->with('success', 'Profile updated successfully.');
    }
 
}