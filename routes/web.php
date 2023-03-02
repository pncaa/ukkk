<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransaksiController;
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
    return view('welcome');
});

Route::get('/main', function () {
    return view('tampilan.mainbar');
});

Route::get('/transaksi', [TransaksiController::class, 'index']) ->name('transaksi')->middleware('auth');
Route::get('/tambahtransaksi', [TransaksiController::class, 'tambahtransaksi']) ->name('tambahtransaksi');
Route::get('/tampiltransaksi/{id}', [TransaksiController::class, 'tampiltransaksi']) ->name('tampiltransaksi');
Route::get('/hapustransaksi/{id}', [TransaksiController::class, 'hapustransaksi']) ->name('hapustransaksi');
Route::post('/inserttransaksi', [TransaksiController::class, 'inserttransaksi']) ->name('inserttransaksi');
Route::post('/updatetransaksi/{id}', [TransaksiController::class, 'updatetransaksi']) ->name('transaksi');

//login

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/loginproses', [LoginController::class, 'loginproses']);
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

//pdf
Route::get('/nota/{id}', [TransaksiController::class, 'nota'])->name('nota');



