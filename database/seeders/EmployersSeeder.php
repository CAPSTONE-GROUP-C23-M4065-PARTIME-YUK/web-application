<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employers')->insert([
            [
                'user_id' => '2',
                'company_name' =>  'PT.Sentosa Jaya',
                'company_website' => 'sentosajaya.com', 
                'company_email' => 'sentosajaya@gmail.com', 
                'company_phone' => '082448982733',
                'company_province' => 'Jawa Timur',
                'company_regency' => 'Surabaya',
                'company_address' => 'Graha Pena, Ruang 1503, Jl. Ahmad Yani No.88, Ketintang, Kec. Gayungan, Surabaya, Jawa Timur 60234',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
