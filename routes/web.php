<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\PostCalculatorController;
use App\Http\Controllers\BoxController;

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

// http://localhost/laravel/mano-puikioji-lara/public/calculator/divide/9/3

Route::get('calc', [PostCalculatorController::class, 'show'])->name('show-calc');
Route::post('calc', [PostCalculatorController::class, 'calc'])->name('do-math');


Route::group(['prefix' => 'box'], function() {
    Route::get('', [BoxController::class, 'index'])->name('box.index');
    Route::get('create', [BoxController::class, 'create'])->name('box.create'); //rodo tuscia forma
    Route::post('store', [BoxController::class, 'store'])->name('box.store'); //uzsaugo nauja boxa
    Route::get('edit/{box}', [BoxController::class, 'edit'])->name('box.edit'); //rodo uzpildyta forma

    Route::get('add/{box}', [BoxController::class, 'add'])->name('box.add'); //rodo pridejimo lauka
    Route::get('add-to-box/{box}', [BoxController::class, 'addToBox'])->name('add_to_box.edit'); //prideda ir issaugo

    Route::post('update/{box}', [BoxController::class, 'update'])->name('box.update'); //uzsaugo konkretu redaguota boxa
    Route::post('delete/{box}', [BoxController::class, 'destroy'])->name('box.destroy');
    Route::get('show/{box}', [BoxController::class, 'show'])->name('box.show');
});