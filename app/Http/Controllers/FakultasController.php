<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class FakultasController extends Controller
{
    // Tampilkan halaman dengan daftar Fakultas
    public function index()
    {
        $fakultas = Fakultas::all();
        return view('fakultas.data-fakultas', compact('fakultas'));
    }

    // Tambah data Fakultas
    public function store(Request $request)
    {
                // try {
        $request->validate([
            'id_fakultas' => 'required|string|max:10|unique:fakultas,id_fakultas',
            'fakultas' => 'required|string|max:255',
            'keterangan_fakultas' => 'nullable|string',
            'link_fakultas_ut' => 'nullable|max:255',
            'alias' => 'nullable|string|max:10',
        ]);
        //         } catch (\Illuminate\Validation\ValidationException $e) {
        //     // dd() untuk cek field yang gagal
        //     dd($e->errors()); 
        // }

        // dd($request->all(), $request->file('brosur'));

        Fakultas::create([
            'id_fakultas' => $request->id_fakultas,
            'fakultas' => $request->fakultas,
            'keterangan_fakultas' => $request->keterangan_fakultas,
            'link_fakultas_ut' => $request->link_fakultas_ut,
            'alias' => $request->alias,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil ditambahkan.');
    }

    // Hapus data Fakultas
    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil dihapus.');
    }
}