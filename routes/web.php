<?php
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $destinasi = Destinasi::all();
    return view('welcome', compact ('destinasi'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambah dibawah ini
Route::group(['prefix' => 'admin'], function () {
Route::resource('destinasi', App\Http\Controllers\DestinasiController::class)->middleware('auth');
Route::resource('pengunjung', App\Http\Controllers\PengunjungController::class)->middleware('auth');
Route::resource('reservasi', App\Http\Controllers\ReservasiController::class)->middleware('auth');
Route::resource('transaksi', App\Http\Controllers\TransaksiController::class)->middleware('auth');
});



Route::get('/', [FrontController::class, 'index']);
Route::get('destinasi', [FrontController::class, 'destinasi']);
Route::get('kategori', [FrontController::class, 'destinasi']);
Route::get('destinasi/{id}', [FrontController::class, 'detaildestinasi']);
Route::get('/destinasi/merek/{id}', [FrontController::class, 'filterByMerek'])->name('destinasi.filterByMerek');