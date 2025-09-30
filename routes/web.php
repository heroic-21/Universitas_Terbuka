<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendidikanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');})->name('beranda.utama');
Route::get('/program-studi', function () {return view('pendaftaran.biayaPendidikan');})->name('biaya.pendidikan');
Route::get('/informasi-pendaftaran', function () {return view('pendaftaran.informasiPendaftaran');})->name('informasi.pendaftaran');
Route::get('/pendaftaran', function () {return view('pendaftaran.pendaftaran');})->name('pendaftaran');
Route::get('/brosur', function () {return view('pendaftaran.brosur');})->name('brosur');
Route::get('/informasi', function () {return view('informasi');})->name('informasi');
Route::get('/tentang-kami', function () {return view('tentangKami');})->name('tentang-kami');
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('agama', AgamaController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::get('/mahasiswa/export/csv', [MahasiswaController::class, 'exportCsv'])->name('mahasiswa.export.csv');
Route::get('/mahasiswa/export/pdf', [MahasiswaController::class, 'exportPdf'])->name('mahasiswa.export.pdf');
// Route::put('/jurusan/{kode_jurusan}', [JurusanController::class, 'update']);
