<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(): View
    {
        return view('project');
    }
}
