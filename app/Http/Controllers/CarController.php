<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'manufacturer_id' => 'required',
            'transmission_id' => 'required',
            'color' => 'required',
            'size' => 'required'
        ]);
        $car = new Car([
            'name' => $request->get('name'),
            'manufacturer_id' => $request->get('manufacturer_id'),
            'transmission_id' => $request->get('transmission_id'),
            'color' => $request->get('color'),
            'size' => $request->get('size')
        ]);
        $car->save();

        return new CarResource($car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
//        $car->update([
//            'name' => $request->get('name'),
//            'manufacturer_id' => $request->get('manufacturer_id'),
//            'transmission_id' => $request->get('transmission_id'),
//            'color' => $request->get('color'),
//            'size' => $request->get('size')
//        ]);
        $car->update($request->all());

        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return new CarResource($car);
    }
}
