<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GardenController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lara', function () {
    return 'Labas Lara';
});

Route::get('kelias-i-lara-2', function () {
    return 'Vel Lara';
});

Route::get('gates/{vaisius}/{id}', [GardenController::class, 'index']);

/*
urle turi buti: calculator/suma/2/3
prideti, atimti, padalinti, padauginti
*/

Route::get('calculator/sum/{a}/{b}', [GardenController::class, 'sum']);
Route::get('calculator/multiply/{a}/{b}', [GardenController::class, 'multiply']);
Route::get('calculator/divide/{a}/{b}', [GardenController::class, 'divide']);
Route::get('calculator/substract/{a}/{b}', [GardenController::class, 'substract']);