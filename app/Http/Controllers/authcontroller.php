<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
 
class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function register()
    {
        return view('auth/register');
    }
 
    public function registerSave(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ])->validate();
 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);
 
        return redirect()->route('login');
    }

    public function forgot_password()
    {
        return view('auth/forgot_password');
    }

    public function reset_password(Request $request)
    {
         // Validasi data yang diterima dari formulir
         $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'new_password' => 'required|string|min:5',
        ]);

        // Cari user berdasarkan nama dan email
        $user = User::where('name', $request->name)->where('email', $request->email)->first();

        // Jika user tidak ditemukan, kembalikan dengan pesan error
        if (!$user) {
            return back()->withErrors(['email' => 'User not found with provided name and email.']);
        }

        // Reset password user
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->route('login')->with('success', 'Password has been reset successfully.');
    }
 
    public function login()
    {
        return view('auth/login');
    }
 
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
 
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }

        $request->session()->regenerate();
 
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin/home');
        } else {
            return redirect()->route('home');
        }
         
        
         
        
    }
 
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken(); // Regenerasi token
 
        return redirect('/login');
    }
    
}

    