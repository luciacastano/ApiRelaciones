<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Hotel::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Hotel::find($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return Hotel::destroy($id);
    }
}
