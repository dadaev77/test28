<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;
use App\Models\User;
use App\Models\CarBrand;
use App\Models\CarModel;

class CarSeeder extends Seeder
{
    public function run()
    {
        // Создаем пользователя, если его нет
        $user = User::firstOrCreate([
            'email' => 'test@example.com'
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password')
        ]);


        $brand = CarBrand::first();
        $model = CarModel::first();

        if (!$brand || !$model) {
            $this->command->error('Please seed CarBrand and CarModel tables first.');
            return;
        }

        Car::create([
            'car_brand_id' => $brand->id,
            'car_model_id' => $model->id,
            'user_id' => $user->id,
            'year_of_manufacture' => 2020,
            'mileage' => 15000,
            'color' => 'Red'
        ]);

        Car::create([
            'car_brand_id' => $brand->id,
            'car_model_id' => $model->id,
            'user_id' => $user->id,
            'year_of_manufacture' => 2019,
            'mileage' => 30000,
            'color' => 'Blue'
        ]);
    }
}
