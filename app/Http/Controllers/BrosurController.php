<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brosur;
use Illuminate\Support\Facades\Storage;

class BrosurController extends Controller
{
    // 🔹 Tampilkan semua data
    public function indexAdmin()
    {
        $brosur = Brosur::all();
        return view('brosur.data-brosur', compact('brosur'));
    }

    public function indexPublic()
    {
        $brosur = Brosur::all();
        return view('pendaftaran.brosur', compact('brosur'));
    }

    // 🔹 Form tambah
    public function create()
    {
        return view('brosur.createBro');
    }

    // 🔹 Simpan data baru
    public function store(Request $request)
    {
        // Dump untuk cek isi request dan file
        

        // Validasi sesuai nama input di form
        // try {
            $validated = $request->validate([
                // 'id_brosur' => 'required|string|max:10',
                'judul_brosur' => 'required|string|max:255',
                'kategori_brosur' => 'required|in:Brosur,Poster',
                'brosur' => 'required|image|mimes:jpg,jpeg,png',
            ]);
        // } catch (\Illuminate\Validation\ValidationException $e) {
        //     // dd() untuk cek field yang gagal
        //     dd($e->errors()); 
        // }

        // dd($request->all(), $request->file('brosur'));

        // Simpan file foto
        $path = $request->file('brosur')->store('brosur', 'public');

        // Simpan data ke database
        Brosur::create([
            // 'id_brosur' => $request->id_brosur,
            'judul_brosur' => $request->judul_brosur,
            'kategori_brosur' => $request->kategori_brosur,
            'brosur' => $path,
        ]);

        return redirect()->route('brosur.indexAdmin')->with('success', 'Data brosur berhasil ditambahkan.');
    }

    // 🔹 Form edit
    public function edit($id)
    {
        $data_brosur = Brosur::findOrFail($id);
        return view('brosur.editBro', compact('data_brosur'));
    }

    // 🔹 Update data
    public function update(Request $request, $id)
    {
        $brosur = Brosur::findOrFail($id);

        $request->validate([
            'judul_brosur' => 'required|string|max:255',
            'kategori_brosur' => 'required|in:Brosur,Poster',
            'brosur' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('brosur')) {
            // Hapus file lama
            if ($brosur->brosur && Storage::disk('public')->exists($brosur->brosur)) {
                Storage::disk('public')->delete($brosur->brosur);
            }

            // Simpan file baru
            $path = $request->file('brosur')->store('brosur', 'public');
            $brosur->brosur = $path;
        }

        $brosur->judul_brosur = $request->judul_brosur;
        $brosur->kategori_brosur = $request->kategori_brosur;
        $brosur->save();

        return redirect()->route('brosur.indexAdmin')->with('success', 'Data brosur berhasil diperbarui.');
    }

    // 🔹 Hapus data
    public function destroy($id)
    {
        $brosur = Brosur::findOrFail($id);

        if ($brosur->brosur && Storage::disk('public')->exists($brosur->brosur)) {
            Storage::disk('public')->delete($brosur->brosur);
        }

        $brosur->delete();

        return redirect()->route('brosur.indexAdmin')->with('success', 'Data brosur berhasil dihapus.');
    }
}