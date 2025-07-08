<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendidikanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('home');});
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('agama', AgamaController::class);
Route::resource('pendidikan', PendidikanController::class);
Route::get('/mahasiswa/export/csv', [MahasiswaController::class, 'exportCsv'])->name('mahasiswa.export.csv');
Route::get('/mahasiswa/export/pdf', [MahasiswaController::class, 'exportPdf'])->name('mahasiswa.export.pdf');
// Route::put('/jurusan/{kode_jurusan}', [JurusanController::class, 'update']);
