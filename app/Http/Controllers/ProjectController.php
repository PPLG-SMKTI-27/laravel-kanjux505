<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController
{
    public function index()
    {
        $projects = [
            [
                'judul' => 'Web Portofolio',
                'keterangan' => 'Website portofolio pribadi menggunakan Laravel'
            ],
            [
                'judul' => 'Sistem Absensi',
                'keterangan' => 'Aplikasi absensi siswa berbasis web'
            ],
            [
                'judul' => 'CRUD Data Siswa',
                'keterangan' => 'Aplikasi CRUD dengan Laravel'
            ],
            [
                'judul' => 'ahah',
                'keterangan' => 'hsdua'
            ]

        ];

        return view('portfolio', [
            'nama' => 'Ricky Susanto',
            'deskripsi' => 'Web Developer | Laravel | UI/UX',
            'projects' => $projects
        ]);
    }
}
