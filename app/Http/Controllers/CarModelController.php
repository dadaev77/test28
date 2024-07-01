<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    public function index()
    {
        return CarModel::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'car_brand_id' => 'required|exists:car_brands,id',
        ]);

        return CarModel::create($request->all());
    }

    public function show(CarModel $carModel)
    {
        return $carModel;
    }

    public function update(Request $request, CarModel $carModel)
    {
        $request->validate([
            'name' => 'required|string',
            'car_brand_id' => 'required|exists:car_brands,id',
        ]);

        $carModel->update($request->all());
        return $carModel;
    }

    public function destroy(CarModel $carModel)
    {
        $carModel->delete();
        return response()->noContent();
    }
}