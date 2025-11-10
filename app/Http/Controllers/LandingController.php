<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\Mahasiswa;
use App\Models\AlumniUt;
use App\Models\Visitor;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        // --- Catat visitor ---
        $userAgent = substr($request->header('User-Agent'), 0, 1024); // aman user-agent panjang

        // Cek cookie 'visited' agar visitor tidak bertambah berkali-kali
        if (!$request->hasCookie('visited')) {
            Visitor::create([
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);
        }

        // --- Ambil data untuk halaman ---
        $total_pengunjung = Visitor::count();

        $totalFakultas = Fakultas::count();
        $totalProdi = ProgramStudi::count();
        $totalMahasiswaAktif = Mahasiswa::where('keterangan', 'Aktif')->count();
        $totalPendaftarUT = Mahasiswa::count();
        $alumni = AlumniUt::all();

        // --- Render view dengan cookie (60 menit) ---
        return response()->view('home', compact(
            'totalFakultas', 
            'totalProdi', 
            'totalMahasiswaAktif', 
            'totalPendaftarUT',
            'alumni',
            'total_pengunjung'
        ))->cookie('visited', true, 1440); // cookie 60 menit
    }
}
