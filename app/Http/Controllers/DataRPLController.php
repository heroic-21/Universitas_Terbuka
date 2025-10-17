<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InformasiPendaftaran;
use Illuminate\Support\Facades\Validator;
use App\Models\UnduhBerkas;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class DataRPLController extends Controller
{
    public function index()
    {
        $data = informasiPendaftaran::first();
        $berkas = UnduhBerkas::all();

        return view('pendaftaranAdmin.informasiPendaftaran', compact('data', 'berkas'));
    }

    public function indexPublic()
    {
        $data = informasiPendaftaran::first();
        $berkasList = UnduhBerkas::all();

        return view('pendaftaran.informasiPendaftaran', compact('data', 'berkasList'));
    }

    /**
     * Memperbarui data RPL dan Non-RPL
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_rpl' => 'nullable|date',
            'tanggal_rpl_tutup' => 'nullable|date',
            'tanggal_non_rpl' => 'nullable|date',
            'tanggal_non_rpl_tutup' => 'nullable|date',
            'keterangan_rpl' => 'nullable|string|max:255',
            'keterangan_non_rpl' => 'nullable|string|max:255',
        ]);

        $data = InformasiPendaftaran::findOrFail($id);

        $data->update([
            'tanggal_rpl' => $request->tanggal_rpl,
            'tanggal_rpl_tutup' => $request->tanggal_rpl_tutup,
            'tanggal_non_rpl' => $request->tanggal_non_rpl,
            'tanggal_non_rpl_tutup' => $request->tanggal_non_rpl_tutup,
            'keterangan_rpl' => $request->keterangan_rpl,
            'keterangan_non_rpl' => $request->keterangan_non_rpl,
        ]);

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    public function tambahBerkas(Request $request)
    {
        $validated = $request->validate([
            'nama_berkas' => 'required|string|max:255',
            'berkas' => 'required|file|mimes:pdf,doc,docx,jpg,png',
        ]);

        $path = $request->file('berkas')->store('unduhberkas', 'public');

        UnduhBerkas::create([
            'nama_berkas' => $validated['nama_berkas'],
            'berkas' => $path,
        ]);

        return redirect()->back()->with('success', 'Berkas berhasil ditambahkan!');
    }

    // Hapus berkas
    public function hapusBerkas($id)
    {
        $berkas = UnduhBerkas::findOrFail($id);

        // Hapus file di storage
        if ($berkas->berkas && Storage::disk('public')->exists($berkas->berkas)) {
            Storage::disk('public')->delete($berkas->berkas);
        }

        $berkas->delete();

        return redirect()->back()->with('success', 'Berkas berhasil dihapus!');
    }

    public function downloadBerkas($id)
    {
        $berkas = UnduhBerkas::findOrFail($id);
        $path = storage_path('app/public/' . $berkas->berkas);

        if (!file_exists($path)) {
            return redirect()->back()->with('error', 'File tidak ditemukan.');
        }

        $extension = pathinfo($path, PATHINFO_EXTENSION);
        $namaFile = $berkas->nama_berkas . '.' . $extension;

        return response()->download($path, $namaFile);
    }
}
