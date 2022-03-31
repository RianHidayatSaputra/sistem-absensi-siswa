<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\LaporanController;

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
    return view('index');
});

Route::get("/siswa",[SiswaController::class, "index"])->name('siswa');
Route::get("/siswa/create", [SiswaController::class, "getCreateSiswa"]);
Route::post("/siswa/store", [SiswaController::class, "postCreateSiswa"]);
Route::get("/siswa/edit/{id}", [SiswaController::class, "getEditSiswa"]);
Route::post("/siswa/update", [SiswaController::class, "postEditSiswa"]);
Route::get("/siswa/delete/{id}", [SiswaController::class, "delete"]);

Route::get("/rombel",[RombelController::class, "index"])->name('rombel');
Route::get("/rombel/create", [RombelController::class, "getCreateRombel"]);
Route::post("/rombel/store", [RombelController::class, "postCreateRombel"]);
Route::get("/rombel/edit/{id}", [RombelController::class, "getEditRombel"]);
Route::post("/rombel/update", [RombelController::class, "postEditRombel"]);
Route::get("/rombel/delete/{id}", [RombelController::class, "getDeleteRombel"]);

Route::get("/absen", [AbsenController::class, "index"])->name('absen');
Route::get("/absen/create", [AbsenController::class, "getCreateAbsen"]);
Route::post("/absen/store", [AbsenController::class, "postCreateAbsen"]);
Route::get("/cari/siswa", [AbsenController::class, "cariAbsen"])->name('cari');
Route::get("/absen/edit/{id}", [AbsenController::class, "getEditAbsen"]);
Route::post("/absen/update", [AbsenController::class, "postEditAbsen"]);
Route::get("/absen/delete/{id}", [AbsenController::class, "deleteAbsen"]);

Route::get("/laporan", [LaporanController::class, "laporan"])->name('laporan');
Route::get("/laporan/cetak", [LaporanController::class, "cetakLaporan"]);

