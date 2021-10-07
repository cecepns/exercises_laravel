<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SoalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('soals')->insert([
            'soal' => "Siapakah nama sodara tiri squidword?",
            'pilihan_a' => 'rojali',
            'pilihan_b' => 'mang karyo',
            'pilihan_c' => 'debmbele',
            'pilihan_d' => 'Semua salah',
            'kunci_jawaban' => 'A',
        ]);
    }
}

