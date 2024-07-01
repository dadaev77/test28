<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function index()
    {
        return Car::where('user_id', Auth::id())->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_brand_id' => 'required|exists:car_brands,id',
            'car_model_id' => 'required|exists:car_models,id',
            'year_of_manufacture' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'color' => 'nullable|string',
        ]);

        $car = new Car($request->all());
        $car->user_id = Auth::id();
        $car->save();

        return $car;
    }

    public function show(Car $car)
    {
        $this->authorize('view', $car);
        return $car;
    }

    public function update(Request $request, Car $car)
    {
        $this->authorize('update', $car);

        $request->validate([
            'car_brand_id' => 'required|exists:car_brands,id',
            'car_model_id' => 'required|exists:car_models,id',
            'year_of_manufacture' => 'nullable|integer',
            'mileage' => 'nullable|integer',
            'color' => 'nullable|string',
        ]);

        $car->update($request->all());
        return $car;
    }

    public function destroy($id)
    {
        $car = Car::where('id', $id)->where('user_id', Auth::id())->first();

        if ($car) {
            $car->delete();
            return response()->json(['message' => 'successfully removed'], 200);
        }

        return response()->json(['message' => 'Car not found or not authorized'], 404);
    }
}
