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
            'admin_name' => 'Krisnha Wirayudha',
            'username' => 'admin_krisnha',
            'password' => Hash::make('12345678'),
            'admin_address' => 'Jalan Tendean',
            'phone' => '081353224649'
        ]);
    }
}