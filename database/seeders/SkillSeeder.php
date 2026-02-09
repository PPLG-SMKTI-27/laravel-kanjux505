<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run()
{
    DB::table('skills')->insert([
        [
            'nama_skill' => 'HTML',
            'level' => 'Mahir'
        ],
        [
            'nama_skill' => 'CSS',
            'level' => 'Menengah'
        ],
        [
            'nama_skill' => 'Laravel',
            'level' => 'Pemula'
        ]
    ]);
} }

