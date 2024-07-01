<?php

namespace Database\Seeders;

use App\Models\CarModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::create(['name' => 'Patriot', 'car_brand_id' => 1]);
        CarModel::create(['name' => 'Mustang', 'car_brand_id' => 2]);
        CarModel::create(['name' => 'Camry', 'car_brand_id' => 3]);
        CarModel::create(['name' => 'Civic', 'car_brand_id' => 4]);
    }
}
