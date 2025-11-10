<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    // Arahkan user ke Google
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();

        $allowedEmails = [
            'hardi22si@mahasiswa.pcr.ac.id',
            'hardyfcx60@gmail.com',
            'heroicgit21@gmail.com',
            'zanzami23.2@gmail.com',
            'salutnegeri1000kubah@gmail.com',
        ];

        if (!in_array($googleUser->getEmail(), $allowedEmails)) {
            return redirect('/login')->with('error', 'Email kamu tidak diizinkan untuk login.');
        }

        $user = User::updateOrCreate(
            ['email' => $googleUser->getEmail()],
            [
                'name' => $googleUser->getName(),
                'google_id' => $googleUser->getId(),
                'avatar' => $googleUser->getAvatar(),
                'role' => in_array($googleUser->getEmail(), ['hardi22si@mahasiswa.pcr.ac.id','hardyfcx60@gmail.com', 'heroicgit21@gmail.com', 'zanzami23.2@gmail.com', 'salutnegeri1000kubah@gmail.com',])
                    ? 'admin'
                    : 'user',
            ]
        );
        
        Auth::login($user);

        return redirect()->intended('/mahasiswa');
    }
    
        public function logout()
        {
            Auth::logout();
        
            // Hapus session Google agar benar-benar keluar
            request()->session()->invalidate();
            request()->session()->regenerateToken();
        
            return redirect('/login')->with('success', 'Kamu telah logout.');
        }
    }
