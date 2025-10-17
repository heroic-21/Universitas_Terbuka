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
                'role' => in_array($googleUser->getEmail(), ['hardi22si@mahasiswa.pcr.ac.id','hardyfcx60@gmail.com'])
                    ? 'admin'
                    : 'user',
            ]
        );
        
        Auth::login($user);

        return redirect()->intended('/mahasiswa');
    }
}
