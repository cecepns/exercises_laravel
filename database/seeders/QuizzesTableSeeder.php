<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class QuizzesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('quizzes')->insert([
            'name' => "Quiz1",
        ]);
    }
}
