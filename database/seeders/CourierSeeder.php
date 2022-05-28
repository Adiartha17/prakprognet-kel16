<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CourierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('couriers')->insert([
            'courier' => 'jne',
            'created_at' => '2022-05-24 14:23:09',
            'updated_at' => '2022-05-24 14:23:09',            
        ]);

        DB::table('couriers')->insert([
            'courier' => 'pos',
            'created_at' => '2022-05-24 14:23:09',
            'updated_at' => '2022-05-24 14:23:09',            
        ]);

        DB::table('couriers')->insert([
            'courier' => 'tiki',
            'created_at' => '2022-05-24 14:23:09',
            'updated_at' => '2022-05-24 14:23:09',            
        ]);
    }
}
