<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
public function run()
{
    DB::table('projects')->insert([
        [
            'judul' => 'Website Portofolio',
            'deskripsi' => 'Website portofolio pribadi menggunakan Laravel',
            'gambar' => 'goat valo.png'
        ],
        [
            'judul' => 'Aplikasi Login',
            'deskripsi' => 'Form login sederhana menggunakan Laravel',
            'gambar' => 'suki.jpeg'
        ]
    ]);
}

}
