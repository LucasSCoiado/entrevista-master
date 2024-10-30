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

//GET
Route::get('/', [TravelController::class, 'index']);//mostrar todos os registros
Route::get('/motorista', [TravelController::class, 'driver']);
Route::get('/viagem', [TravelController::class, 'trip']);
Route::get('/veiculo', [TravelController::class, 'vehicle']);
Route::get('/driverShow/{id}', [TravelController::class, 'driverShow']); // mostrar dados expecificos
Route::get('/travelShow/{id}', [TravelController::class, 'travelShow']); // mostrar dados expecificos
Route::get('/vehicleShow/{id}', [TravelController::class, 'vehicleShow']); // mostrar dados expecificos
Route::get('/register/travelRegister', [TravelController::class, 'travelRegister']);//formulario de cadastro no banco
Route::get('/register/driverRegister', [TravelController::class, 'driverRegister']);//formulario de cadastro no banco
Route::get('/register/vehicleRegister', [TravelController::class, 'vehicleRegister']);//formulario de cadastro no banco

//POST
Route::post('/register', [TravelController::class, 'storeVehicle']);//enviar dados ao banco
Route::post('/drivers', [TravelController::class, 'store']);//enviar dados ao banco
Route::post('/travels', [TravelController::class, 'storeTravel']);//enviar dados ao banco
