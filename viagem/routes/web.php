<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\TravelController;

Route::get('/', [TravelController::class, 'index']);
Route::get('/motorista', [TravelController::class, 'driver']);
Route::get('/viagem', [TravelController::class, 'trip']);
Route::get('/veiculo', [TravelController::class, 'vehicle']);
Route::get('/register/travelRegister', [TravelController::class, 'travelRegister']);
Route::get('/register/driverRegister', [TravelController::class, 'driverRegister']);
Route::get('/register/vehicleRegister', [TravelController::class, 'vehicleRegister']);