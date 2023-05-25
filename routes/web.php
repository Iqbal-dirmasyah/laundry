<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PelangganDashboardController;
use App\Http\Controllers\OrderDashboardController;
use App\Http\Controllers\PembayaranDashboardController;
use App\Http\Controllers\ServiceDashboardController;
use App\Http\Controllers\StatusDashboardController;
use App\Http\Controllers\HargaDashboardController;
use App\Http\Controllers\LayananDashboardController;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');

});

Route::get('/login', [LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class,'logout']);
Route::post('/login', [LoginController::class,'authenticate']);
Route::resource('pelanggan', PelangganController::class);
Route::resource('service', ServiceController::class);
Route::resource('order', OrderController::class);
Route::resource('pembayaran', PembayaranController::class);
Route::resource('status', StatusController::class);
Route::resource('pelanggan-dashboard', PelangganDashboardController::class);
Route::resource('service-dashboard', ServiceDashboardController::class);
Route::resource('order-dashboard', OrderDashboardController::class);
Route::resource('pembayaran-dashboard', PembayaranDashboardController::class);
Route::resource('status-dashboard', StatusDashboardController::class);
Route::resource('harga-dashboard', HargaDashboardController::class);
Route::resource('layanan-dashboard', LayananDashboardController::class);
