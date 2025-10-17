<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\Mahasiswa;
use App\Models\AlumniUt;

class LandingController extends Controller
{
    public function index()
    {
        // Hitung jumlah fakultas
        $totalFakultas = Fakultas::count();

        // Hitung jumlah program studi
        $totalProdi = ProgramStudi::count();

        // Hitung jumlah mahasiswa aktif (misal kolom 'keterangan' bernilai 'Aktif')
        $totalMahasiswaAktif = Mahasiswa::where('keterangan', 'Aktif')->count();

        // Hitung total pendaftar UT (semua mahasiswa)
        $totalPendaftarUT = Mahasiswa::count();

        $alumni = AlumniUt::all(); // ambil semua alumni

        return view('home', compact(
            'totalFakultas', 
            'totalProdi', 
            'totalMahasiswaAktif', 
            'totalPendaftarUT',
            'alumni'
        ));
    }
}
