<?php

use App\Http\Controllers\AgamaController;
use App\Http\Controllers\ProgramStudiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\Pendaftaran;
use App\Http\Controllers\DataRPLController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\BrosurController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Route;
use App\Models\Visitor;
use App\Http\Controllers\VisitorController;

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::get('login', function () {return view('login');})->name('login');
Route::post('/logout', [GoogleController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('mahasiswa', MahasiswaController::class);
    Route::resource('prodi', ProgramStudiController::class);
    Route::resource('agama', AgamaController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::get('/informasi_pendaftaran_view', [DataRPLController::class, 'index'])->name('informasi.pendaftaran.view');
    Route::post('/unduh-berkas/tambah', [DataRPLController::class, 'tambahBerkas'])->name('unduhberkas.store');
    Route::delete('/unduh-berkas/hapus/{id}', [DataRPLController::class, 'hapusBerkas'])->name('unduhberkas.destroy');
    Route::put('/informasi_pendaftaran_update/{id_informasi_pendaftaran}', [DataRPLController::class, 'update'])->name('informasi.pendaftaran.update');
    Route::get('/mahasiswa/export/csv', [MahasiswaController::class, 'exportCsv'])->name('mahasiswa.export.csv');
    Route::get('/mahasiswa/export/pdf', [MahasiswaController::class, 'exportPdf'])->name('mahasiswa.export.pdf');
    Route::get('/alumni/edit', [AlumniController::class, 'editMultiple'])->name('alumni.editMultiple');
    Route::put('/alumni/update-multiple', [AlumniController::class, 'updateMultiple'])->name('alumni.update');
    Route::get('/fakultas', [FakultasController::class, 'index'])->name('fakultas.index');
    Route::post('/fakultas/store', [FakultasController::class, 'store'])->name('fakultas.store');
    Route::delete('/fakultas/destroy/{id}', [FakultasController::class, 'destroy'])->name('fakultas.destroy');
    Route::get('/tentang-kami-admin', [TentangKamiController::class, 'edit'])->name('tentangkami-admin.edit');
    Route::put('/tentang-kami-admin/update', [TentangKamiController::class, 'update'])->name('tentangkami-admin.update');
    Route::get('/brosur/tambah', [BrosurController::class, 'create'])->name('brosur.create');
    Route::post('/brosur/simpan', [BrosurController::class, 'store'])->name('brosur.store');
    Route::get('/brosur/edit/{id}', [BrosurController::class, 'edit'])->name('brosur.edit');
    Route::post('/brosur/update/{id}', [BrosurController::class, 'update'])->name('brosur.update');
    Route::delete('/brosur/hapus/{id}', [BrosurController::class, 'destroy'])->name('brosur.destroy');
    Route::get('/brosur/admin', [BrosurController::class, 'indexAdmin'])->name('brosur.indexAdmin');
});
Route::get('/', [LandingController::class, 'index'])->name('beranda.utama');
Route::get('/program-studi', [Pendaftaran::class, 'biayapendidikan'])->name('biaya.pendidikan');
Route::get('/informasi-pendaftaran', [DataRPLController::class, 'indexPublic'])->name('informasi.pendaftaran');
Route::get('/pendaftaran', [Pendaftaran::class, 'index'])->name('pendaftaran');
Route::post('/send-pendaftaran', [Pendaftaran::class, 'pendaftaran'])->name('send.pendaftaran');
Route::get('/brosur', function () {return view('pendaftaran.brosur');})->name('brosur');
Route::get('/informasi', function () {return view('informasi');})->name('informasi');
Route::get('/tentang-kami', [TentangKamiController::class, 'indexPublic'])->name('tentang-kami');
Route::get('/unduh/{id}', [DataRPLController::class, 'downloadBerkas'])->name('down');
Route::get('/brosur/public', [BrosurController::class, 'indexPublic'])->name('brosur.indexPublic');

// Route::get('/test-visitor', function () {
//     Visitor::create([
//         'ip' => request()->ip(),
//         'user_agent' => request()->header('User-Agent'),
//         'visited_at' => now(),
//     ]);

//     return 'Data visitor berhasil ditambah!';
// });

Route::get('/track-visitor', [\App\Http\Controllers\VisitorController::class, 'track']);
