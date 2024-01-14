<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Vehicle::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Vehicle::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Vehicle::destroy($id);
    }
}
