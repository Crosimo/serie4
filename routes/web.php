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

Route::get('/fruit/create', [FruitController::class, "create"]);
Route::post('/fruits', [FruitController::class, "store"]);

Route::get('/legume/create', [LegumeController::class, "create"])->name('createLegume');

Route::post('/legume', [LegumeController::class, "store"]);

Route::get('/legume/show/{id}', [LegumeController::class, "show"])->name('showLegume');

Route::get('/fruit/show/{id}', [LegumeController::class, "show"])->name('showFruit');
