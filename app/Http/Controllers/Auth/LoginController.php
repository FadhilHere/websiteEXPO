<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        if (Auth::check()) {
            switch (Auth::user()->level) {
                case 'admin':
                    return redirect('/admin/konten');
                    break;
            }
        }
        return view('Auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {

            $user = auth()->user();
            session(['username' => $user->username]);

            if ($user->level === 'admin') {
                return redirect()->route('admin.index');
            }
        }

        return redirect()->route('login')->withInput()->withErrors(['login' => 'Username/password Salah.']);
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/');
    }
}
