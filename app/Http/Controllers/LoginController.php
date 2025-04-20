<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {

        $infoLogin = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            $request->session()->regenerate();
    
            $user = Auth::user();
    
            // Arahkan berdasarkan role
            switch ($user->role) {
                case 'user':
                    return redirect()->intended('/');
                case 'admin':
                    return redirect()->intended('/admin');
                case 'pembina':
                    return redirect()->intended('/pembina');
                case 'ketua':
                    return redirect()->intended('/ketua');
                default:
                    Auth::logout(); // untuk keamanan
                    return redirect('/login')->withErrors([
                        'email' => 'Role tidak dikenali.',
                    ]);
            }
        }
        return redirect('/login')->withErrors('Username dan Password yang anda masukan salah')->withInput();
    }
}
