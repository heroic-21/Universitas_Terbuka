<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProgramStudi;
use App\Models\Fakultas;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Validator;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rule;
use App\Models\Agama;
use Illuminate\Support\Str;

class Pendaftaran extends Controller
{
    public function index(){
        $prodi = ProgramStudi::all();
        $agama = Agama::all();
        // Generate captcha random 6 karakter angka & huruf
        $captcha = Str::upper(Str::random(6));

        // Simpan captcha di session
        session(['captcha_code' => $captcha]);
        return view('pendaftaran.pendaftaran', compact("prodi", "agama", "captcha"));
    }

    public function pendaftaran(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_ibu_kandung' => 'required|string',
            'tempat_lahir' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:mahasiswa,email',
            'nomor_hp' => 'required|numeric|digits:12',
            'nomor_nik' => 'required|numeric|digits:16|unique:mahasiswa,nomor_nik',
            'id_agama' => 'required',
            'jenis_kelamin' => 'required',
            'status_pernikahan' => 'required',
            'status_pekerjaan' => 'required',
            'sumber_informasi_ut' => 'required',
            'layanan_program' => 'required',
            'jalur_program' => 'required',
            'kode_program_studi' => 'required',
            'keterangan' => 'required',
            'captcha' => 'required',
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'nama_ibu_kandung.required' => 'Nama ibu kandung wajib diisi.',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date' => 'Tanggal lahir harus valid.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'nomor_hp.required' => 'Nomor HP wajib diisi.',
            'nomor_hp.numeric' => 'Nomor HP harus angka.',
            'nomor_hp.digits' => 'Nomor HP harus 12 digit.',
            'nomor_nik.required' => 'NIK wajib diisi.',
            'nomor_nik.numeric' => 'NIK harus angka.',
            'nomor_nik.digits' => 'NIK harus 16 digit.',
            'nomor_nik.unique' => 'NIK sudah digunakan.',
            'id_agama.required' => 'Agama wajib dipilih.',
            'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
            'status_pernikahan.required' => 'Status pernikahan wajib dipilih.',
            'status_pekerjaan.required' => 'Status pekerjaan wajib dipilih.',
            'sumber_informasi_ut.required' => 'Sumber informasi UT wajib dipilih.',
            'layanan_program.required' => 'Layanan program wajib dipilih.',
            'jalur_program.required' => 'Jalur program wajib dipilih.',
            'kode_program_studi.required' => 'Program studi wajib dipilih.',
            'keterangan.required' => 'Kategori mahasiswa wajib dipilih.',
            'captcha.required' => 'Kode captcha wajib diisi.',
        ]);

        // Cek captcha
        if ($request->captcha !== session('captcha_code')) {
            return back()->withErrors(['captcha' => 'Kode captcha tidak sesuai'])->withInput();
        }

        $data = $request->all();

        // Buat NIM random 9 digit
        do {
            $nim = str_pad(mt_rand(0, 999999999), 9, '0', STR_PAD_LEFT);
        } while (Mahasiswa::where('nim', $nim)->exists());

        Mahasiswa::create([
            'nim' => $nim,
            'nama_lengkap' => $data['nama_lengkap'],
            'nama_ibu_kandung' => $data['nama_ibu_kandung'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'email' => $data['email'],
            'nomor_hp' => $data['nomor_hp'],
            'nomor_nik' => $data['nomor_nik'],
            'id_agama' => $data['id_agama'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'status_pernikahan' => $data['status_pernikahan'],
            'status_pekerjaan' => $data['status_pekerjaan'],
            'sumber_informasi_ut' => $data['sumber_informasi_ut'],
            'layanan_program' => $data['layanan_program'],
            'jalur_program' => $data['jalur_program'],
            'kode_program_studi' => $data['kode_program_studi'],
            'keterangan' => $data['keterangan'],
        ]);

        session()->forget('captcha_code');

        $nomorAdmin = '6285246220297';
        $pesan = "Halo Admin UT Bagansiapiapi, saya ingin mendaftar sebagai Mahasiswa Baru.\n";
        $pesan .= "Berikut data saya:\n";
        $pesan .= "Nama Lengkap         : {$request->nama_lengkap}\n";
        $pesan .= "NIK                  : {$request->nomor_nik}\n";
        $pesan .= "Email                : {$request->email}\n";
        $pesan .= "Nomor WA             : {$request->nomor_hp}\n";
        $pesan .= "Program Studi        : {$request->kode_program_studi}\n";
        $pesan .= "Layanan Program      : {$request->layanan_program}\n";
        $pesan .= "Jalur Program        : {$request->jalur_program}\n";
        $pesan .= "Agama                : {$request->id_agama}\n";
        $pesan .= "Jenis Kelamin        : {$request->jenis_kelamin}\n";
        $pesan .= "Status Pernikahan    : {$request->status_pernikahan}\n";
        $pesan .= "Status Pekerjaan     : {$request->status_pekerjaan}\n";
        $pesan .= "Sumber Info UT       : {$request->sumber_informasi_ut}\n";
        $pesan .= "Kategori Mahasiswa   : {$request->keterangan}\n\n";
        $pesan .= "Mohon informasi langkah selanjutnya. Terima kasih.";

        $urlWA = "https://wa.me/{$nomorAdmin}?text=" . urlencode($pesan);

        return redirect($urlWA);
    }

    public function biayapendidikan(){
        $fakultas = Fakultas::with('prodi')->get(); // Eager loading
        return view('pendaftaran.biayaPendidikan', compact('fakultas'));
    }
}
