<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;
use Illuminate\Support\Facades\Validator;
use App\Models\Mahasiswa;
use Illuminate\Validation\Rule;

class AgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agamas = Agama::all();
        return view("agama.data-agama", compact("agamas"));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_agama.*' => 'required|string|distinct|unique:agama,id_agama',
            'agama.*' => 'required|string|max:100',
        ], [
            'id_agama.*.required'=> 'ID Agama Wajib Diisi',
            'id_agama.*.distinct'=> 'ID Agama Sama Di Form',
            'id_agama.*.unique'  => 'ID Agama Sudah Ada',
            'agama.*.required'     => 'Agama Wajib Diisi',
            'agama.*.max'          => 'Agama Maksimal 100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('show_modal', true);
        }

        $data = $request->all();
        // dd($data);

        for ($i = 0; $i < count($data['id_agama']); $i++) {
            Agama::create([
                'id_agama' => $data['id_agama'][$i],
                'agama' => $data['agama'][$i],
            ]);
        }

        return redirect()->route('agama.index')->with('success', 'Data Agama berhasil disimpan!');
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
    public function edit(string $id_agama)
    {
        $data_agama = Agama::where('id_agama', $id_agama)->firstOrFail();
        return view('agama.editAg', compact('data_agama'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_agama)
    {
        $agama = Agama::where('id_agama', $id_agama)->firstOrFail();
        $request->validate([
            'id_agama'              => ['required', 'max:10', 'distinct', Rule::unique('agama', 'id_agama')->ignore($id_agama, 'id_agama')],
            'agama'                   => 'required|string|max:255',
        ], [
            'id_agama.required'     => 'ID Agama wajib diisi.',
            'id_agama.unique'    => 'ID Agama sudah digunakan.',
            'id_agama.distinct'     => 'Terdapat ID Agama sama dalam formulir.',
            'id_agama.max'          => 'ID Agama hanya max 10 digits',
            'agama.required'          => 'Agama wajib diisi.',
            'agama.string'            => 'Agama wajib huruf.'
        ]);

        $id_agama = collect($request->agama)->pluck('id_agama');

        $duplicateAgama = $id_agama->duplicates();

        if ($duplicateAgama->isNotEmpty()) {
            return back()->withErrors([
                'duplicate_error' => 'Terdapat data ganda pada ID Agama di formulir.',
            ])->withInput();
        }

        // $data = $request->all();

        // dd($data);

        $id_agama_baru = $request->id_agama;

        if ($id_agama !== $id_agama_baru) {
            Mahasiswa::where('id_agama', $id_agama)->update([
                'id_agama' => $id_agama_baru,
            ]);
        }

        $agama->update([
            'id_agama'      => $request->id_agama,
            'agama'           => $request->agama,
        ]);

        return redirect()->route('agama.index')->with('success', 'Data Agama berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $agama = Agama::find($id);
        if (!$agama) {
            return redirect()->route('agama.index')->with('error', 'Data Agama tidak ditemukan.');
        }
        // dd($jurusan);
        $agama->delete();
        return redirect()->route('agama.index')->with('deleted', 'Data Agama berhasil dihapus!');
    }
}
