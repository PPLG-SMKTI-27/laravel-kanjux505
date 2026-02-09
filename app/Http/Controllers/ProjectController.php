<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController 
{
    public function index()
    {
        // Ambil semua data dari tabel projects
        $projects = Project::all();

        // Kirim data ke view
        return view('projects.index', compact('projects'));
    }
}
