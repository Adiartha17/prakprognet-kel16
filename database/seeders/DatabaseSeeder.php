<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        // \App\Models\User::factory(10)->create();
        Kategori::create([
            'category_name' => 'Pakaian Anak'
        ]);

        Kategori::create([
            'category_name' => 'Pakaian Dewasa'
        ]);
        // Products::factory(20)->create();
        // $this->call(CouriersTableSeeder::class);
	    $this->call(ProvinceSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CourierSeeder::class);
    }
}
