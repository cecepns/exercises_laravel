<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class KuisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kuis')->insert([
            "nama_kuis" => "Latihan Patrick",
            "tanggal_mulai" => "2021-10-07",
            "status" => "open"
        ]);
    }
}
