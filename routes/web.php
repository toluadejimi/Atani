<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\SearchController;
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
Route::get('about-us',[CarController::class, 'about_us']);
Route::get('contact-us',[CarController::class, 'contact_us']);
Route::get('news',[CarController::class, 'news']);

Route::get('search2',[SearchController::class, 'search2']);




Route::controller(SearchController::class)->group(function(){
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
    Route::post('search', 'search')->name('search');
    Route::post('book', 'book')->name('book');
    Route::post('book2', 'book2')->name('book2');
    Route::post('book3', 'book3')->name('book3');





});

