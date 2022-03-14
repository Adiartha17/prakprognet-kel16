<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'admin_name' => 'Adi Artha',
            'username' => 'admin_adi',
            'password' => Hash::make('adi123456'),
            'admin_address' => 'Jalan Gunung Salak',
            'phone' => '081234567890'
        ]);
    }
}
