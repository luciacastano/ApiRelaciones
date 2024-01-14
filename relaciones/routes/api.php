<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\VehicleController;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/* -------- Rutas para trip -------- */
Route::get('/trip', [TripController::class, 'index']);
Route::get('/trip/{id}', [TripController::class, 'show']);
Route::delete('/trip/{id}', [TripController::class, 'destroy']);

// mostrar hotel y vehículo asociado al id del viaje, relaciones hasMany
Route::get('trip/{id}/hotel', [TripController::class, 'hotelTrip']);
Route::get('trip/{id}/vehicle', [TripController::class, 'vehicleTrip']);


/* -------- Rutas para hotel -------- */
Route::get('/hotel', [HotelController::class, 'index']);
Route::get('/hotel/{id}', [HotelController::class, 'show']);
Route::delete('/hotel/{id}', [HotelController::class, 'destroy']);


/* -------- Rutas para vehicle -------- */
Route::get('/vehicle', [VehicleController::class, 'index']);
Route::get('/vehicle/{id}', [VehicleController::class, 'show']);
Route::delete('/vehicle/{id}', [VehicleController::class, 'destroy']);