<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_us')->insert([
            [
                'name' => 'Isma Fitria',
                'email' =>  'Sentosa@gmail.com',
                'message' => 'Testing Maasuk Guys',
            ],
        ]);
    }
}