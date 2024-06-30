<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\upcomingController;
use App\Http\Controllers\bioskopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\componentscontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listfilmcontroller;
use App\Http\Controllers\mallbioskopcontroller;
use App\Http\Controllers\filmcontroller;
use App\Http\Controllers\film1controller;
use App\Http\Controllers\pembeliancontroller;
use App\Http\Controllers\moviecontroller;
use App\Http\Controllers\pilihjadwalcontroller;
use App\Http\Controllers\confirmpembayarancontroller;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\pilihkursiController;
use App\Models\Transaction;

// Gabungkan rute bebas dan rute terproteksi
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::get('/commponents/footer', [componentscontroller::class, 'footer']);
Route::get('/commponents/header', [componentscontroller::class, 'header']);

// Rute untuk halaman detail film "Upcoming"
Route::get('/upcoming/{id}', [UpcomingController::class, 'show'])->name('upcoming.show');
Route::get('/upcoming', [upcomingController::class, 'upcoming'])->name('upcoming'); 
Route::get('/bioskop', [bioskopController::class, 'Bioskop'])->name('bioskop');
Route::get('/tiket_order', [HomeController::class, 'tiket'])->name('tiket');

Route::get('/mallbioskop/bcs', [mallbioskopcontroller::class, 'bcs'])->name('mallbioskop/bcs');


Route::get('/film/film1', [filmcontroller::class, 'film'])->name('film/film1');
Route::get('/film/film2', [filmcontroller::class, 'film1'])->name('film/film2');

Route::get('/film1/film1', [film1controller::class, 'film'])->name('film1/film1');
Route::get('/film1/film2', [film1controller::class, 'film1'])->name('film1/film2');
Route::get('/film1/film3', [film1controller::class, 'film2'])->name('film1/film3');

Route::get('/products', [ProductController::class, 'userIndex'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::middleware(['auth'])->group(function () {
    Route::get('/pembelian/tiket/{product}', [PembelianController::class, 'show'])->name('pembelian.tiket');
    Route::get('/pilihkursi/{productId}/{movieId}', [PembayaranController::class, 'show'])->name('pilihkursi');
    Route::post('/proses-pembayaran', [PembayaranController::class, 'prosespayment'])->name('prosespembayaran');
    Route::get('/konfirmasi-pembayaran/{transaction}', [PembayaranController::class, 'checkout'])->name('confirmpembayaran');
    Route::post('/midtrans/notification', [PembayaranController::class, 'handle'])->name('midtrans.notification');
    
    Route::get('/payment/success/{id_transaction}', function(Transaction $transaction, $id_transaction) {
        return view('payment.success', compact('transaction', 'id_transaction'));
    })->name('payment.success');
    
    Route::get('/payment/error', function() {
        return view('payment.error');
    })->name('payment.error');

    Route::get('/generate-ticket/{id_transaction}', [PembayaranController::class, 'generateTicket'])->name('generate.ticket');

    Route::get('/pembelian/beli', [PembelianController::class, 'beli'])->name('pembelian/beli');
    Route::get('/pembelian/tiket1', [pembeliancontroller::class, 'tiket1'])->name('pembelian/tiket1');
    Route::get('/pembelian/tiket2', [pembeliancontroller::class, 'tiket2'])->name('pembelian/tiket2');
    Route::get('/pembelian/confirbeli', [pembeliancontroller::class, 'confirm'])->name('pembelian/confirbeli');
    Route::post('/pembelian/konfirmasi', [PembelianController::class, 'konfirmasi'])->name('pembelian.konfirmasi');
    Route::get('/pembelian/sukses', [PembelianController::class, 'sukses'])->name('pembelian.sukses');
});


Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('forgot_password', 'forgot_password')->name('forgot_password');
    Route::post('forgot_password', 'reset_password')->name('reset_password.save');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () { 
    Route::get('/profile', [UserController::class, 'userprofile'])->name('userprofile');
    Route::post('/profile/update', [UserController::class, 'update'])->name('userprofile.update');
});

//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin.profile');

    Route::get('/admin/listfilm/coming', [listfilmController::class, 'listcoming'])->name('admin.listfilm.coming');
    Route::get('/admin/listfilm/daftar', [listfilmController::class, 'listdaftar'])->name('admin.listfilm.daftar');
    Route::get('/admin/listfilm/playing', [listfilmController::class, 'listplaying'])->name('admin.listfilm.playing');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products.create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

    Route::resource('movies', moviecontroller::class);

});
