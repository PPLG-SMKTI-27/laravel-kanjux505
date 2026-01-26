<?php

namespace App\Http\Controllers;

class ProjectController 
{
    public function index()
    {
        return view('portfolio');
    }

    public function dashboard()
    {
        if (!session('login')) {
            return redirect('/login');
        }

        return view('dashboard');
    }
}
