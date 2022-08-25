<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransmissionResource;
use App\Models\Transmission;
use Illuminate\Http\Request;

class TransmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TransmissionResource::collection(Transmission::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate();
        $request->validate([
            'type' => 'required'
        ]);
        $transmission = new Transmission([
            'type' => $request->get('type')
        ]);
        $transmission->save();

        return new TransmissionResource($transmission);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function show(Transmission $transmission)
    {
        return new TransmissionResource($transmission);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transmission $transmission)
    {
        $transmission->update($request->all());
        return new TransmissionResource($transmission);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transmission  $transmission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transmission $transmission)
    {
        $transmission->delete();
        return new TransmissionResource($transmission);
    }
}
