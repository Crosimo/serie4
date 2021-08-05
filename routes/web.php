<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\LegumeController;
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

Route::get('/fruit', [FruitController::class, "index"])->name('fruit');


Route::get('/legume', [LegumeController::class, "index"])->name('legume');
