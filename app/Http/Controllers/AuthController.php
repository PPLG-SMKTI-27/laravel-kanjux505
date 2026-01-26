<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController 
{
    public function loginForm()
    {
        return view('login');
    }

    public function loginProcess(Request $request)
    {
        if (
            $request->email === 'admin@sekolah.id' &&
            $request->password === '123456'
        ) {
            session(['login' => true]);
            return redirect('/dashboard');
        }

        return back()->with('error', 'Email atau password salah');
    }
}
