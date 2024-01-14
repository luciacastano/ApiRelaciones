<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Trip::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Trip::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Trip::destroy($id);
    }


    public function hotelTrip($id)
    {
        $trip = Trip::findOrFail($id);

        if (!$trip) {
            return response()->json([
                'success' => false,
                'message' => 'Hotel asociado a viaje ' .$id. ' no encontrado',
            ]);
        }
        
        $trip->hotel;

        return response()->json([
            'success' => true,
            'message' => 'Hotel asociado a viaje ' .$id. ' encontrado',
            'data' =>  $trip
        ]);
    }

    public function vehicleTrip($id)
    {
        $trip = Trip::findOrFail($id);

        if (!$trip) {
            return response()->json([
                'success' => false,
                'message' => 'Vehículo asociado a viaje ' .$id. ' no encontrado',
            ]);
        }

        $trip->vehicle;

        return response()->json([
            'success' => true,
            'message' => 'Vehículo asociado a viaje ' .$id. ' encontrado',
            'data' => $trip
        ]);
    }
}
