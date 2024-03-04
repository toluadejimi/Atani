<?php

use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[CarController::class, 'index']);

Route::get('category/{cars}',[CarController::class, 'category_view']);
Route::get('car-details/{id}',[CarController::class, 'car_details']);
Route::get('all-cars',[CarController::class, 'all_cars']);
