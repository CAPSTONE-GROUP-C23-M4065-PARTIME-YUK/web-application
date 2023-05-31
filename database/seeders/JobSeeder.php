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
                'job_category_id' => '1',
                'campus_id' =>  '1',
                'employer_id' => '1',
                'title' => 'Back End Engineer',
                'description' => 'Dibutuhkan Senior back end engineer segera',
                'requirement' => 'bahasa pemrograman php',
                'location' => 'Bandung',
                'salary' => '2000000',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],

        ]);
    }
}
