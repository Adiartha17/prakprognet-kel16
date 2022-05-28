<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user_name' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' =>'2022-05-13 03:04:43',
            'password' => Hash::make('user12345'),
            'alamat' => 'Jalan alamat user',
            'telepon' => '081234567890'
        ]);
    }
}
