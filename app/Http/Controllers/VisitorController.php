<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;

class VisitorController extends Controller
{
    public function track(Request $request)
    {
        // Ambil User-Agent, maksimal 512 karakter agar aman
        $userAgent = substr($request->header('User-Agent'), 0, 512);

        // Cek cookie untuk mencegah visitor duplikat (opsional)
        if (!$request->hasCookie('visited')) {
            Visitor::create([
                'ip' => $request->ip(),
                'user_agent' => $userAgent,
                'visited_at' => now(),
            ]);

            return response()->json([
                'message' => 'Visitor berhasil ditambahkan!'
            ])->cookie('visited', true, 60); // Cookie 60 menit
        }

        return response()->json([
            'message' => 'Visitor sudah tercatat sebelumnya'
        ]);
    }
}
