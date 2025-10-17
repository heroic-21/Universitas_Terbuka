<?php

namespace App\Http\Controllers;

use App\Models\ProgramStudi;
use App\Models\Fakultas;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rule;

class ProgramStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = ProgramStudi::all();
        $fakultas = Fakultas::all();
        $pendidikan = Pendidikan::all();
        return view("prodi.data-prodi", compact("prodis", "fakultas", "pendidikan"))
            ->with('fakultas', $fakultas)
            ->with('pendidikan', $pendidikan);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_program_studi.*'              => 'required|string|max:10|distinct|unique:program_studi,kode_program_studi',
            'program_studi.*'                   => 'required|string|max:255',
            'keterangan_prodi.*'                => 'nullable|string|max:255', // opsional
            'link_prodi_ut.*'                   => 'nullable|url|max:255', // opsional
            'id_pendidikan.*'                   => 'required|string|exists:pendidikan,id_pendidikan',
            'id_fakultas.*'                     => 'required|string|exists:fakultas,id_fakultas',
        ], [
            'kode_program_studi.*.required'     => 'Kode Prodi wajib diisi',
            'kode_program_studi.*.distinct'     => 'Kode Prodi tidak boleh sama di form',
            'kode_program_studi.*.unique'       => 'Kode Prodi sudah ada di database',
            'kode_program_studi.*.max'          => 'Kode Prodi maksimal 10 karakter',

            'program_studi.*.required'          => 'Nama Program Studi wajib diisi',
            'program_studi.*.max'               => 'Nama Program Studi maksimal 255 karakter',

            'keterangan_prodi.*.max'            => 'Keterangan maksimal 255 karakter',

            'link_prodi_ut.*.url'               => 'Link Prodi harus berupa URL yang valid',

            'id_pendidikan.*.required'          => 'Pendidikan wajib dipilih',
            'id_pendidikan.*.exists'            => 'Pendidikan tidak ditemukan',

            'id_fakultas.*.required'            => 'Fakultas wajib dipilih',
            'id_fakultas.*.exists'              => 'Fakultas tidak ditemukan',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('show_modal', true);
        }

        $data = $request->all();

        foreach ($data['kode_program_studi'] as $i => $kode) {
            ProgramStudi::create([
                'kode_program_studi'           => $kode,
                'program_studi'                      => $data['program_studi'][$i],
                'keterangan_prodi'             => $data['keterangan_prodi'][$i] ?? null,
                'link_prodi_ut'                => $data['link_prodi_ut'][$i] ?? null,
                'id_pendidikan'                => $data['id_pendidikan'][$i],
                'id_fakultas'                  => $data['id_fakultas'][$i],
            ]);
        }

        return redirect()->route('prodi.index')->with('success', 'Data Prodi berhasil disimpan!');
    }


    /**
     * Update the specified resource in storage.
     */

     public function edit(string $kode_program_studi)
    {
        $data_prodi = ProgramStudi::where('kode_program_studi', $kode_program_studi)->firstOrFail();
        $fakultas = Fakultas::all();
        $pendidikan = Pendidikan::all();
        return view('prodi.editProdi', compact('data_prodi', "fakultas", "pendidikan"));
    }

    public function update(Request $request, $kode_program_studi)
    {
        $program_studi = ProgramStudi::where('kode_program_studi', $kode_program_studi)->firstOrFail();

        $request->validate([
            'kode_program_studi'              => [
                'required',
                'max:10',
                Rule::unique('program_studi', 'kode_program_studi')->ignore($kode_program_studi, 'kode_program_studi')
            ],
            'program_studi'                   => 'required|string|max:255',
            'keterangan_prodi'                => 'nullable|string|max:255',
            'link_prodi_ut'                   => 'nullable|url|max:255',
            'id_pendidikan'                   => 'required|exists:pendidikan,id_pendidikan',
            'id_fakultas'                     => 'required|exists:fakultas,id_fakultas',
        ], [
            'kode_program_studi.required'     => 'Kode Prodi wajib diisi.',
            'kode_program_studi.unique'       => 'Kode Prodi sudah digunakan.',
            'kode_program_studi.max'          => 'Kode Prodi maksimal 10 karakter.',
            'program_studi.required'          => 'Nama Prodi wajib diisi.',
            'program_studi.string'            => 'Nama Prodi wajib berupa teks.',
            'link_prodi_ut.url'               => 'Link Prodi harus berupa URL yang valid.',
            'id_pendidikan.required'          => 'Pendidikan wajib dipilih.',
            'id_pendidikan.exists'            => 'Pendidikan tidak ditemukan.',
            'id_fakultas.required'            => 'Fakultas wajib dipilih.',
            'id_fakultas.exists'              => 'Fakultas tidak ditemukan.',
        ]);

        $kode_program_studi_baru = $request->kode_program_studi;

        // jika kode_prodi berubah, update juga di tabel mahasiswa
        if ($kode_program_studi !== $kode_program_studi_baru) {
            Mahasiswa::where('kode_program_studi', $kode_program_studi)
                ->update(['kode_program_studi' => $kode_program_studi_baru]);
        }

        $program_studi->update([
            'kode_program_studi'           => $request->kode_program_studi,
            'program_studi'                => $request->program_studi,
            'keterangan_prodi'             => $request->keterangan_prodi,
            'link_prodi_ut'                => $request->link_prodi_ut,
            'id_pendidikan'                => $request->id_pendidikan,
            'id_fakultas'                  => $request->id_fakultas,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data Prodi berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $program_studi = ProgramStudi::find($id);
        if (!$program_studi) {
            return redirect()->route('prodi.index')->with('error', 'Data Prodi tidak ditemukan.');
        }
        // dd($program_studi);
        $program_studi->delete();
        return redirect()->route('prodi.index')->with('deleted', 'Data Prodi berhasil dihapus!');
    }
}
