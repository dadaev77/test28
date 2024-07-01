<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    public function index()
    {
        return CarBrand::all();
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        return CarBrand::create($request->all());
    }

    public function show(CarBrand $carBrand)
    {
        return $carBrand;
    }

    public function update(Request $request, CarBrand $carBrand)
    {
        $request->validate(['name' => 'required|string']);
        $carBrand->update($request->all());
        return $carBrand;
    }

    public function destroy(CarBrand $carBrand)
    {
        $carBrand->delete();
        return response()->noContent();
    }
}
