<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\halamancontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\NilaiController;

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
    return view('welcome');
});

Route::get('/login', [ AuthController::class, 'login'])->name('login');
Route::get('/registerasi', [ AuthController::class, 'registerasi'])->name('registerasi');

Route::get('/Beranda', [ BerandaController::class, 'Beranda']);

Route::get('/halamanutama', [ halamancontroller::class, 'halamanutama'])->name('halamanutama');

// Siswa
Route::get("/siswa",[ SiswaController::class, 'index']);
Route::get("/siswa/create",[ SiswaController::class, 'create']);
Route::post("/siswa/store",[ SiswaController::class, 'store']);
Route::get("/siswa/{id}/edit",[ SiswaController::class, 'edit']);
Route::post("/siswa/{id}/update",[ SiswaController::class, 'update']);
Route::get("/siswa/{id}/delete",[ SiswaController::class, 'destroy']);
Route::get("/siswa/search",[ SiswaController::class, 'search']);

// Guru
Route::get("/guru",[ GuruController::class, 'index']);
Route::get("/guru/create",[ GuruController::class, 'create']);
Route::post("/guru/store",[ GuruController::class, 'store']);
Route::get("/guru/{id}/edit",[ GuruController::class, 'edit']);
Route::post("/guru/{id}/update",[ GuruController::class, 'update']);
Route::get("/guru/{id}/delete",[ GuruController::class, 'destroy']);
Route::get("/guru/search",[ GuruController::class, 'search']);

// Mapel
Route::get("/mapel",[ MapelController::class, 'index']);
Route::get("/mapel/create",[ MapelController::class, 'create']);
Route::post("/mapel/store",[ MapelController::class, 'store']);
Route::get("/mapel/{id}/edit",[ MapelController::class, 'edit']);
Route::post("/mapel/{id}/update",[ MapelController::class, 'update']);
Route::get("/mapel/{id}/delete",[ MapelController::class, 'destroy']);
Route::get("/mapel/search",[ MapelController::class, 'search']);

// Nilai
Route::get("/nilai",[ NilaiController::class, 'index']);
Route::get("/nilai/create",[ NilaiController::class, 'create']);
Route::post("/nilai/store",[ NilaiController::class, 'store']);
Route::get("/nilai/{id}/edit",[ NilaiController::class, 'edit']);
Route::post("/nilai/{id}/update",[ NilaiController::class, 'update']);
Route::get("/nilai/{id}/delete",[ NilaiController::class, 'destroy']);
Route::get("/nilai/search",[ NilaiController::class, 'search']);



// relasi antar tabel
Route::get("/siswa/guru",[ SiswaController::class, 'guru']);
Route::get("/siswa/guru/search",[ SiswaController::class, 'search']);

Route::get("/guru/mapel",[ GuruController::class, 'mapel']);

Route::get("/mapel/search",[ MapelController::class, 'search']);
