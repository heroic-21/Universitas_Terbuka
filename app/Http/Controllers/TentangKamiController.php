<?php

namespace App\Http\Controllers;

use App\Models\TentangKami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    public function edit()
    {
        // Ambil 2 data pertama dari tabel
        $datas = TentangKami::take(2)->get();

        return view('tentangKamiAdmin.data-tentangKamiAdmin', compact('datas'));
    }

    public function indexPublic(){
        $admins = TentangKami::get();

        // Kirim data ke view
        return view('tentangKami', compact('admins'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'admin.*' => 'required|string|max:255',
            'jabatan.*' => 'required|string|max:255',
            'tentang_admin.*' => 'nullable|string',
            'kontak_wa.*' => 'nullable|string|max:20',
            'instagram.*' => 'nullable|string|max:100',
            'gambar.*' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'id_tentang_kami.*' => 'required|exists:tentang_kami,id_tentang_kami',
        ]);

        foreach ($request->id_tentang_kami as $index => $id) {
            $tentang = TentangKami::find($id);
            if ($tentang) {
                $tentang->admin = $request->admin[$index];
                $tentang->jabatan = $request->jabatan[$index];
                $tentang->tentang_admin = $request->tentang_admin[$index];
                $tentang->kontak_wa = $request->kontak_wa[$index];
                $tentang->instagram = $request->instagram[$index];

                if ($request->hasFile("gambar.$index")) {
                    if ($tentang->gambar && Storage::exists('public/' . $tentang->gambar)) {
                        Storage::delete('public/' . $tentang->gambar);
                    }
                    $tentang->gambar = $request->file("gambar.$index")->store('tentang_kami', 'public');
                }

                $tentang->save();
            }
        }

        return redirect()->route('tentangkami-admin.edit')->with('success', 'Data berhasil diperbarui!');
    }
}