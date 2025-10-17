<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\ProgramStudi;
use App\Models\Pendidikan;
use App\Models\Agama;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Barryvdh\DomPDF\Facade\Pdf;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view("mahasiswa.data-mahasiswa", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = ProgramStudi::all();
        $pendidikan = Pendidikan::all();
        $agama = Agama::all();
        return view('mahasiswa.createMhs', compact("prodi", "pendidikan", "agama"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cek apakah ada data NIM dikirim
        if (!$request->has('nim')) {
            return back()->withErrors(['nim' => 'Silakan isi Form Input Data.'])->withInput();
        }

        // Validasi input
        $request->validate([
            'nim.*'              => 'required|digits:9|distinct|unique:mahasiswa,nim',
            'nama_lengkap.*'     => 'required|string|max:255',
            'tempat_lahir.*'     => 'required|string',
            'tanggal_lahir.*'    => 'required|date',
            'email.*'            => 'required|distinct|email|unique:mahasiswa,email',
            'default_password.*' => 'required|string',
            'nomor_hp.*'         => 'required|numeric|digits:12',
            'nomor_nik.*'        => 'required|digits:16|distinct|numeric|unique:mahasiswa,nomor_nik',
            'nama_ibu_kandung.*' => 'required|string',
            'tahun_masuk.*'      => 'required|digits:4|numeric',
            'tahun_wisuda.*'     => 'required|digits:4|numeric',
            'keterangan.*'       => 'required|string',
            'status_pekerjaan.*' => 'required|string',
            'jenis_kelamin.*'    => 'required|string',
            'status_pernikahan.*'=> 'required|string',
            'layanan_program.*'  => 'required|string',
            'jalur_program.*'    => 'required|string',
            'kode_program_studi.*' => 'required',
            'id_agama.*'         => 'required',
        ], [
            'nim.*.required'              => 'NIM wajib diisi.',
            'nim.*.unique'                => 'NIM sudah digunakan.',
            'nim.*.distinct'              => 'Terdapat NIM sama dalam formulir.',
            'nim.*.digits'                => 'NIM harus 9 digits',
            'nama_lengkap.*.required'     => 'Nama lengkap wajib diisi.',
            'nama_lengkap.*.string'       => 'Nama lengkap wajib huruf.',
            'tempat_lahir.*.required'     => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.*.required'    => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.*.date'        => 'Tanggal lahir harus berupa tanggal yang valid.',
            'email.*.required'            => 'Email wajib diisi.',
            'email.*.email'               => 'Format email tidak valid.',
            'email.*.unique'              => 'Email sudah digunakan.',
            'email.*.distinct'            => 'Terdapat Email sama dalam formulir.',
            'default_password.*.required' => 'Password wajib diisi.',
            'nomor_hp.*.required'         => 'Nomor handphone wajib diisi.',
            'nomor_hp.*.numeric'          => 'Nomor handphone harus berupa angka.',
            'nomor_hp.*.digits'           => 'Nomor handphone harus 12 digits',
            'nomor_nik.*.required'        => 'Nomor NIK wajib diisi.',
            'nomor_nik.*.numeric'         => 'Nomor NIK harus berupa angka.',
            'nomor_nik.*.unique'          => 'Nomor NIK sudah digunakan.',
            'nomor_nik.*.distinct'        => 'Terdapat NIK sama dalam formulir.',
            'nomor_nik.*.digits'          => 'Nomor NIK harus 16 digits',
            'nama_ibu_kandung.*.required' => 'Nama ibu kandung wajib diisi.',
            'nama_ibu_kandung.*.string'   => 'Nama ibu kandung wajib huruf.',
            'tahun_masuk.*.required'      => 'Tahun masuk wajib diisi.',
            'tahun_masuk.*.digits'        => 'Tahun masuk harus 4 digit.',
            'tahun_masuk.*.numeric'       => 'Tahun masuk wajib angka.',
            'tahun_wisuda.*.required'     => 'Tahun wisuda wajib diisi.',
            'tahun_wisuda.*.digits'       => 'Tahun wisuda harus 4 digit.',
            'tahun_wisuda.*.numeric'      => 'Tahun wisuda wajib angka.',
            'keterangan.*.required'       => 'Keterangan wajib diisi.',
            'status_pekerjaan.*.required' => 'Status pekerjaan wajib diisi.',
            'jenis_kelamin.*.required'    => 'Jenis Kelamin wajib diisi.',
            'status_pernikahan.*.required'=> 'Status Pernikahan wajib diisi.',
            'layanan_program.*.required'  => 'Layanan Program wajib diisi.',
            'jalur_program.*.required'    => 'Jalur Program wajib diisi.',
            'kode_program_studi.*.required'=> 'Prodi wajib dipilih.',
            'id_agama.*.required'         => 'Agama wajib dipilih.',
        ]);

        $data = $request->all();

        // Cek duplikasi manual dalam array form
        $nimList   = collect($data['nim']);
        $emailList = collect($data['email']);
        $nikList   = collect($data['nomor_nik']);

        $duplicateNIMs   = $nimList->duplicates();
        $duplicateEmails = $emailList->duplicates();
        $duplicateNIKs   = $nikList->duplicates();

        if ($duplicateNIMs->isNotEmpty() || $duplicateEmails->isNotEmpty() || $duplicateNIKs->isNotEmpty()) {
            return back()->withErrors([
                'duplicate_error' => 'Terdapat data ganda pada NIM, Email, atau NIK di formulir.',
            ])->withInput();
        }

        // dd(request->All());

        // Simpan data mahasiswa
        for ($i = 0; $i < count($data['nim']); $i++) {
            Mahasiswa::create([
                'nim'               => $data['nim'][$i],
                'nama_lengkap'      => $data['nama_lengkap'][$i],
                'tempat_lahir'      => $data['tempat_lahir'][$i],
                'tanggal_lahir'     => $data['tanggal_lahir'][$i],
                'email'             => $data['email'][$i],
                'default_password'  => bcrypt($data['default_password'][$i]), // hash password
                'nomor_hp'          => $data['nomor_hp'][$i],
                'nomor_nik'         => $data['nomor_nik'][$i],
                'nama_ibu_kandung'  => $data['nama_ibu_kandung'][$i],
                'tahun_masuk'       => $data['tahun_masuk'][$i],
                'tahun_wisuda'      => $data['tahun_wisuda'][$i],
                'keterangan'        => $data['keterangan'][$i],
                'status_pekerjaan'  => $data['status_pekerjaan'][$i],
                'jenis_kelamin'     => $data['jenis_kelamin'][$i],
                'status_pernikahan' => $data['status_pernikahan'][$i],
                'layanan_program'   => $data['layanan_program'][$i],
                'jalur_program'     => $data['jalur_program'][$i],
                'kode_program_studi'=> $data['kode_program_studi'][$i],
                'id_agama'          => $data['id_agama'][$i],
            ]);
        }

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $data = Mahasiswa::all();
        // $jurusan = Jurusan::all();
        // $pendidikan = Pendidikan::all();
        // $agama = Agama::all();
        // return view('mahasiswa.showMhs', compact("data","jurusan", "pendidikan", "agama"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();
        $prodi = ProgramStudi::all();
        $agama = Agama::all();
        return view('mahasiswa.editMhs', compact('mahasiswa', 'prodi', 'agama'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $nim)
    {
        
        $mahasiswa = Mahasiswa::where('nim', $nim)->firstOrFail();

        $request->validate([
            'nim'              => ['required', 'digits:9', Rule::unique('mahasiswa', 'nim')->ignore($mahasiswa->nim, 'nim')],
            'nama_lengkap'     => 'required|string|max:255',
            'tempat_lahir'     => 'required|string',
            'tanggal_lahir'    => 'required|date',
            'email'            => ['required', 'email', Rule::unique('mahasiswa', 'email')->ignore($mahasiswa->nim, 'nim')],
            'default_password' => 'required|string',
            'nomor_hp'         => 'required|numeric|digits:12',
            'nomor_nik'        => ['required', 'digits:16', 'numeric', Rule::unique('mahasiswa', 'nomor_nik')->ignore($mahasiswa->nim, 'nim')],
            'nama_ibu_kandung' => 'required|string',
            'tahun_masuk'      => 'required|digits:4|numeric',
            'tahun_wisuda'     => 'required|digits:4|numeric',
            'keterangan'       => 'required|string',
            'status_pekerjaan' => 'required|string',
            'jenis_kelamin'    => 'required|string',
            'status_pernikahan'=> 'required|string',
            'layanan_program'  => 'required|string',
            'jalur_program'    => 'required|string',
            'kode_program_studi' => 'required',
            'id_agama'         => 'required',
        ], [
            'nim.required'              => 'NIM wajib diisi.',
            'nim.unique'                => 'NIM sudah digunakan.',
            'nim.digits'                => 'NIM harus 9 digit.',
            'nama_lengkap.required'     => 'Nama lengkap wajib diisi.',
            'tempat_lahir.required'     => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.required'    => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date'        => 'Tanggal lahir tidak valid.',
            'email.required'            => 'Email wajib diisi.',
            'email.email'               => 'Format email tidak valid.',
            'email.unique'              => 'Email sudah digunakan.',
            'default_password.required' => 'Password wajib diisi.',
            'nomor_hp.required'         => 'Nomor HP wajib diisi.',
            'nomor_hp.numeric'          => 'Nomor HP harus angka.',
            'nomor_hp.digits'           => 'Nomor HP harus 12 digit.',
            'nomor_nik.required'        => 'Nomor NIK wajib diisi.',
            'nomor_nik.numeric'         => 'Nomor NIK harus angka.',
            'nomor_nik.unique'          => 'Nomor NIK sudah digunakan.',
            'nomor_nik.digits'          => 'Nomor NIK harus 16 digit.',
            'nama_ibu_kandung.required' => 'Nama ibu kandung wajib diisi.',
            'tahun_masuk.required'      => 'Tahun masuk wajib diisi.',
            'tahun_masuk.digits'        => 'Tahun masuk harus 4 digit.',
            'tahun_masuk.numeric'       => 'Tahun masuk wajib angka.',
            'tahun_wisuda.required'     => 'Tahun wisuda wajib diisi.',
            'tahun_wisuda.digits'       => 'Tahun wisuda harus 4 digit.',
            'tahun_wisuda.numeric'      => 'Tahun wisuda wajib angka.',
            'keterangan.required'       => 'Keterangan wajib diisi.',
            'status_pekerjaan.required' => 'Status pekerjaan wajib diisi.',
            'jenis_kelamin.required'    => 'Jenis Kelamin wajib diisi.',
            'status_pernikahan.required'=> 'Status Pernikahan wajib diisi.',
            'layanan_program.required'  => 'Layanan Program wajib diisi.',
            'jalur_program.required'    => 'Jalur Program wajib diisi.',
            'kode_program_studi.required' => 'Prodi wajib dipilih.',
            'id_agama.required'         => 'Agama wajib dipilih.',
        ]);

        // dd($request->all());

        $mahasiswa->update([
            'nim'              => $request->nim,
            'nama_lengkap'     => $request->nama_lengkap,
            'tempat_lahir'     => $request->tempat_lahir,
            'tanggal_lahir'    => $request->tanggal_lahir,
            'email'            => $request->email,
            // hash password agar konsisten dengan store
            'default_password' => bcrypt($request->default_password),
            'nomor_hp'         => $request->nomor_hp,
            'nomor_nik'        => $request->nomor_nik,
            'nama_ibu_kandung' => $request->nama_ibu_kandung,
            'tahun_masuk'      => $request->tahun_masuk,
            'tahun_wisuda'     => $request->tahun_wisuda,
            'keterangan'       => $request->keterangan,
            'status_pekerjaan' => $request->status_pekerjaan,
            'jenis_kelamin'    => $request->jenis_kelamin,
            'status_pernikahan'=> $request->status_pernikahan,
            'layanan_program'  => $request->layanan_program,
            'jalur_program'    => $request->jalur_program,
            'kode_program_studi' => $request->kode_program_studi,
            'id_agama'         => $request->id_agama,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.index')->with('error', 'Data Mahasiswa tidak ditemukan.');
        }
        $mahasiswa->delete();
        return redirect()->route('mahasiswa.index')->with('success', 'Data Mahasiswa berhasil dihapus!');
    }

    public function exportCsv(): StreamedResponse
    {
        $fileName = 'Data Mahasiswa UT.xlsx';
        $mahasiswa = Mahasiswa::with(['prodi', 'agama', 'pendidikan'])->get();

        $headers = [
            "Content-type"        => "xlsx",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = [
            'NIM',
            'Nama Lengkap',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Email',
            'Default Password',
            'Nomor HP',
            'Nomor NIK',
            'Nama Ibu Kandung',
            'Tahun Masuk',
            'Tahun Wisuda',
            'Keterangan',
            'Status Pekerjaan',
            'Kode Prodi',
            'ID Agama',
            'ID Pendidikan'
        ];

        $callback = function () use ($mahasiswa, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($mahasiswa as $row) {
                fputcsv($file, [
                    "\t" . $row->nim,
                    $row->nama_lengkap,
                    $row->tempat_lahir,
                    Carbon::parse($row->tanggal_lahir)->translatedFormat('l, d F Y'),
                    $row->email,
                    $row->default_password,
                    "\t" . $row->nomor_hp,
                    "\t" . $row->nomor_nik,
                    $row->nama_ibu_kandung,
                    $row->tahun_masuk,
                    $row->tahun_wisuda,
                    $row->keterangan,
                    $row->status_pekerjaan,
                    $row->prodi->prodi,
                    $row->agama->agama,
                    $row->pendidikan->program_pendidikan,
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function exportPdf()
    {
        $mahasiswa = Mahasiswa::with(['prodi', 'agama', 'pendidikan'])->get();

        $pdf = Pdf::loadView('mahasiswa.export-pdf', compact('mahasiswa'))
          ->setPaper('a4', 'landscape');

        return $pdf->download('data_mahasiswa.pdf');

    }
}
