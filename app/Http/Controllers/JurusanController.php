<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rule;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jurusans = Jurusan::all();
        return view("jurusan.data-jurusan", compact("jurusans"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_jurusan.*' => 'required|string|distinct|unique:jurusan,kode_jurusan',
            'jurusan.*' => 'required|string|max:100',
        ], [
            'kode_jurusan.*.required'=> 'Kode Jurusan Wajib Diisi',
            'kode_jurusan.*.distinct'=> 'Kode Jurusan Sama Di Form',
            'kode_jurusan.*.unique'  => 'Kode Jurusan Sudah Ada',
            'jurusan.*.required'     => 'Nama Jurusan Wajib Diisi',
            'jurusan.*.max'          => 'Nama Jurusan Maksimal 100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('show_modal', true);
        }

        $data = $request->all();
        // dd($data);

        for ($i = 0; $i < count($data['kode_jurusan']); $i++) {
            Jurusan::create([
                'kode_jurusan' => $data['kode_jurusan'][$i],
                'jurusan' => $data['jurusan'][$i],
            ]);
        }

        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan berhasil disimpan!');
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit(string $kode_jurusan)
    {
        $data_jurusan = Jurusan::where('kode_jurusan', $kode_jurusan)->firstOrFail();
        return view('jurusan.editJrs', compact('data_jurusan'));
    }

    public function update(Request $request, $kode_jurusan)
    {
        $jurusan = Jurusan::where('kode_jurusan', $kode_jurusan)->firstOrFail();
        $request->validate([
            'kode_jurusan'              => ['required', 'max:10', 'distinct', Rule::unique('jurusan', 'kode_jurusan')->ignore($kode_jurusan, 'kode_jurusan')],
            'jurusan'                   => 'required|string|max:255',
        ], [
            'kode_jurusan.required'     => 'Kode Jurusan wajib diisi.',
            'kode_jurusan.unique'    => 'Kode Jurusan sudah digunakan.',
            'kode_jurusan.distinct'     => 'Terdapat Kode Jurusan sama dalam formulir.',
            'kode_jurusan.max'          => 'Kode Jurusan hanya max 10 digits',
            'jurusan.required'          => 'Nama Jurusan wajib diisi.',
            'jurusan.string'            => 'Nama Jurusan wajib huruf.'
        ]);

        $kode_jurusan = collect($request->jurusan)->pluck('kode_jurusan');

        $duplicateKodeJurusan = $kode_jurusan->duplicates();

        if ($duplicateKodeJurusan->isNotEmpty()) {
            return back()->withErrors([
                'duplicate_error' => 'Terdapat data ganda pada Kode Jurusan di formulir.',
            ])->withInput();
        }

        // $data = $request->all();

        // dd($data);

        $kode_jurusan_baru = $request->kode_jurusan;

        if ($kode_jurusan !== $kode_jurusan_baru) {
            Mahasiswa::where('kode_jurusan', $kode_jurusan)->update([
                'kode_jurusan' => $kode_jurusan_baru,
            ]);
        }

        $jurusan->update([
            'kode_jurusan'      => $request->kode_jurusan,
            'jurusan'           => $request->jurusan,
        ]);

        return redirect()->route('jurusan.index')->with('success', 'Data Jurusan berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jurusan = Jurusan::find($id);
        if (!$jurusan) {
            return redirect()->route('jurusan.index')->with('error', 'Data Jurusan tidak ditemukan.');
        }
        // dd($jurusan);
        $jurusan->delete();
        return redirect()->route('jurusan.index')->with('deleted', 'Data Jurusan berhasil dihapus!');
    }
}
