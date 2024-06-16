<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run()
    {
        DB::table('konsultasis')->insert([
            'nama' => 'nazwa',
            'email' => 'nazwasalsabila1002@gmail.com',
            'alamat' => 'jl. persatuan',
            'tanggal' => '2023-07-06',
            'nohp' => '087771030559',
            'keluhan' => 'sakit',
        ]);
    }
}