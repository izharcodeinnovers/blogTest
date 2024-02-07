<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-voting', [\App\Http\Controllers\VotingController::class, 'index'])->name('check-form');
Route::post('check-result',[\App\Http\Controllers\VotingController::class,'check'])->name('check-voting');
Route::get('marrige-form',[\App\Http\Controllers\CheckMarrige::class,'index'])->name('marrige-form');
Route::post('marrige-result',[\App\Http\Controllers\CheckMarrige::class,'check'])->name('marrige-result');
Route::get('calculator',[\App\Http\Controllers\CalculatorController::class,'index'])->name('calculator');
Route::post('calculate',[\App\Http\Controllers\CalculatorController::class,'calculate'])->name('calculate');

