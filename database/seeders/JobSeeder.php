<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            [
                'employer_id' => '1',
                'title' => 'Dibutuhkan Back End Engineer Node.JS',
                'job_category_id' => '4',
                'description' => 'Dibutuhkan Senior back end engineer segera',
                'requirement' => 'bahasa pemrograman php',
                'experience' => '2 - 3 Tahun',
                'tipe_lowongan' => 'freelance',
                'salary' => '2000000 - 4000000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
