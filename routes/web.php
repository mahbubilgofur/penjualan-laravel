<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DasboardController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailtrxController;
use App\Http\Controllers\UsernameController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

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
///barang
Route::get('/',[DasboardController::class,'index']);
Route::get('/index',[DasboardController::class,'indexku']);
Route::get('/bread',[DasboardController::class,'indexc']);
Route::get('/button',[DasboardController::class,'indexd']);
Route::get('/card',[DasboardController::class,'indexe']);
Route::get('/alert',[BarangController::class,'index']);
Route::post('/tambah',[BarangController::class,'tambahdata']);
Route::get('/hapusa/{id}',[BarangController::class,'hapusdata']);
Route::get('/coba/{id}',[DasboardController::class,'indexf']);
Route::post('/coba/{id}',[DasboardController::class,'editdata']);

//jenis
Route::get('/badge',[JenisController::class,'index']);
Route::post('/tambahan',[JenisController::class,'tambahdata']);
Route::get('/hapusb/{id}',[JenisController::class,'hapusdata']);
Route::get('/edit/{id}',[JenisController::class,'indexg']);
Route::post('/edit/{id}',[JenisController::class,'editdata']);

//transaksi
Route::get('/bread',[TransaksiController::class,'index']);
Route::post('/tambahdata',[TransaksiController::class,'tambahdata']);
Route::get('/hapus/{id}',[TransaksiController::class,'hapusdata']);
Route::get('/editan/{id}',[TransaksiController::class,'indexh']);
Route::post('/editan/{id}',[TransaksiController::class,'editdata']);

//detailtrx
Route::get('/button',[DetailtrxController::class,'index']);
Route::post('/tambahdate',[DetailtrxController::class,'tambahdate']);
Route::get('/hapusc/{id}',[DetailtrxController::class,'hapusdate']);
Route::get('/editdate/{id}',[DetailtrxController::class,'indexi']);
Route::post('/editdate/{id}',[DetailtrxController::class,'editdate']);

//username
Route::get('/card',[UsernameController::class,'index']);
Route::post('/tambahdat',[UsernameController::class,'tambahdate']);
Route::get('/hapusd/{id}',[UsernameController::class,'hapusdate']);
Route::get('/editdatas/{id}',[UsernameController::class,'indexj']);
Route::post('/editdatas/{id}',[UsernameController::class,'editdate']);

//sekolah
