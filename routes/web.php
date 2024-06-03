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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/commponents/footer', [componentscontroller::class, 'footer']);
Route::get('/commponents/header', [componentscontroller::class, 'header']);


Route::get('/upcoming', [upcomingController::class, 'upcoming'])->name('upcoming');
Route::get('/bioskop', [bioskopController::class, 'Bioskop'])->name('bioskop');


Route::get('/mallbioskop/bcs', [mallbioskopcontroller::class, 'bcs'])->name('mallbioskop/bcs');


Route::get('/film/film1', [filmcontroller::class, 'film'])->name('film/film1');
Route::get('/film/film2', [filmcontroller::class, 'film1'])->name('film/film2');
 
Route::get('/film1/film1', [film1controller::class, 'film'])->name('film1/film1');
Route::get('/film1/film2', [film1controller::class, 'film1'])->name('film1/film2');
Route::get('/film1/film3', [film1controller::class, 'film2'])->name('film1/film3');



Route::middleware(['auth'])->group(function () {
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
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [UserController::class, 'userprofile'])->name('userprofile');
    Route::post('/profile/update', [UserController::class, 'update'])->name('userprofile.update');
});
 
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
    Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');

    Route::get('/admin/listfilm/coming', [listfilmController::class, 'listcoming'])->name('admin/listfilm/coming');
    Route::get('/admin/listfilm/daftar', [listfilmController::class, 'listdaftar'])->name('admin/listfilm/daftar');
    Route::get('/admin/listfilm/playing', [listfilmController::class, 'listplaying'])->name('admin/listfilm/playing');
 
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
    Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
    Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
    Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
    Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
    Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
});