<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumniUt;
use Illuminate\Support\Facades\Storage;

class AlumniController extends Controller
{
    // Tampilkan form edit 4 alumni
    public function editMultiple()
    {
        // Ambil 4 alumni terbaru atau sesuai kebutuhan
        $alumni = AlumniUt::latest()->take(4)->get();

        return view('alumni.data-alumni', compact('alumni'));
    }

    // Update data alumni sekaligus
    public function updateMultiple(Request $request)
    {
        // Validasi setiap field
        $request->validate([
            'nama.*' => 'required|string|max:255',
            'jabatan.*' => 'required|string|max:255',
            'kesan.*' => 'nullable|string',
            'gambar.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Loop setiap alumni berdasarkan id
        foreach ($request->nama as $id => $nama) {
            $alumni = AlumniUt::find($id);
            if ($alumni) {
                $data = [
                    'nama' => $nama,
                    'jabatan' => $request->jabatan[$id],
                    'kesan' => $request->kesan[$id] ?? null,
                ];

                // Jika ada file gambar baru, simpan dan update path
                if ($request->hasFile('gambar.' . $id)) {
                    // Hapus file lama jika ada
                    if ($alumni->gambar && Storage::disk('public')->exists($alumni->gambar)) {
                        Storage::disk('public')->delete($alumni->gambar);
                    }

                    $data['gambar'] = $request->file('gambar.' . $id)->store('alumni', 'public');
                }

                $alumni->update($data);
            }
        }

        return redirect()->route('alumni.editMultiple')->with('success', 'Data alumni berhasil diperbarui.');
    }
}