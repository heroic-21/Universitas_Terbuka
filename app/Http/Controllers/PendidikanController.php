<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Validator;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rule;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikans = Pendidikan::all();
        return view("pendidikan.data-pendidikan", compact("pendidikans"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pendidikan.*' => 'required|string|distinct|unique:pendidikan,id_pendidikan',
            'program_pendidikan.*' => 'required|string|max:100',
        ], [
            'id_pendidikan.*.required'=> 'ID Pendidikan Wajib Diisi',
            'id_pendidikan.*.distinct'=> 'ID Pendidikan Sama Di Form',
            'id_pendidikan.*.unique'  => 'ID Pendidikan Sudah Ada',
            'program_pendidikan.*.required'     => 'Program Pendidikan Wajib Diisi',
            'program_pendidikan.*.max'          => 'Program Pendidikan Maksimal 100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('show_modal', true);
        }

        $data = $request->all();
        // dd($data);

        for ($i = 0; $i < count($data['id_pendidikan']); $i++) {
            Pendidikan::create([
                'id_pendidikan' => $data['id_pendidikan'][$i],
                'program_pendidikan' => $data['program_pendidikan'][$i],
            ]);
        }

        return redirect()->route('pendidikan.index')->with('success', 'Data Pendidikan berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_pendidikan)
    {
        $data_pendidikan = Pendidikan::where('id_pendidikan', $id_pendidikan)->firstOrFail();
        return view('pendidikan.editPend', compact('data_pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_pendidikan)
    {
        $pendidikan = Pendidikan::where('id_pendidikan', $id_pendidikan)->firstOrFail();
        $request->validate([
            'id_pendidikan'              => ['required', 'max:10', 'distinct', Rule::unique('pendidikan', 'id_pendidikan')->ignore($id_pendidikan, 'id_pendidikan')],
            'program_pendidikan'                   => 'required|string|max:255',
        ], [
            'id_pendidikan.required'     => 'ID Pendidikan wajib diisi.',
            'id_pendidikan.unique'    => 'ID Pendidikan sudah digunakan.',
            'id_pendidikan.distinct'     => 'Terdapat ID Pendidikan sama dalam formulir.',
            'id_pendidikan.max'          => 'ID Pendidikan hanya max 10 digits',
            'program_pendidikan.required'          => 'Program Pendidikan wajib diisi.',
            'program_pendidikan.string'            => 'Program Pendidikan wajib huruf.'
        ]);

        $id_pendidikan = collect($request->pendidikan)->pluck('id_pendidikan');

        $duplicatePendidikan = $id_pendidikan->duplicates();

        if ($duplicatePendidikan->isNotEmpty()) {
            return back()->withErrors([
                'duplicate_error' => 'Terdapat data ganda pada ID Pendidikan di formulir.',
            ])->withInput();
        }

        // $data = $request->all();

        // dd($data);

        $id_pendidikan_baru = $request->id_pendidikan;

        if ($id_pendidikan !== $id_pendidikan_baru) {
            Mahasiswa::where('id_pendidikan', $id_pendidikan)->update([
                'id_pendidikan' => $id_pendidikan_baru,
            ]);
        }

        $pendidikan->update([
            'id_pendidikan'      => $request->id_pendidikan,
            'program_pendidikan'           => $request->program_pendidikan,
        ]);

        return redirect()->route('pendidikan.index')->with('success', 'Data Pendidikan berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return redirect()->route('pendidikan.index')->with('error', 'Data Pendidikan tidak ditemukan.');
        }
        // dd($jurusan);
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('deleted', 'Data Pendidikan berhasil dihapus!');
    }
}
