// <?php

// namespace App\Http\Middleware;

// use Closure;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Cookie;
// use App\Models\Visitor;

// class CountVisitors
// {
//     public function handle(Request $request, Closure $next)
//     {
//         // Cek apakah cookie 'visited' sudah ada
//         if (!$request->hasCookie('visited')) {

//             // Ambil user-agent, potong maksimal 512 karakter agar aman
//             $userAgent = substr($request->header('User-Agent'), 0, 1024);

//             // Simpan data visitor
//             Visitor::create([
//                 'ip' => $request->ip(),
//                 'user_agent' => $userAgent,
//                 'visited_at' => now(),
//             ]);

//             // Lanjut request dan set cookie 'visited' selama 60 menit
//             $response = $next($request);
//             return $response->withCookie(cookie('visited', true, 60));
//         }

//         // Jika cookie sudah ada, lanjut request tanpa menyimpan visitor
//         return $next($request);
//     }
// }
<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\Log;

class CountVisitors
{
    public function handle(Request $request, Closure $next)
    {
        Log::info('Middleware CountVisitors dijalankan', ['ip' => $request->ip()]);

        Visitor::create([
            'ip' => $request->ip(),
            'user_agent' => substr($request->header('User-Agent'), 0, 512),
            'visited_at' => now(),
        ]);

        return $next($request);
    }
}

