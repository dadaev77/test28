<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarBrand::create(['name' => 'UAZ']);
        CarBrand::create(['name' => 'Ford']);
        CarBrand::create(['name' => 'Toyota']);
        CarBrand::create(['name' => 'Honda']);
    }
}
