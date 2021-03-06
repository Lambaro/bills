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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/about', [\App\Http\Controllers\AllRoundController::class, 'about']);


Route::get('/bills', [\App\Http\Controllers\BillsController::class, 'index']);
Route::get('/bills/create', [\App\Http\Controllers\BillsController::class,'create']);
Route::post('/bills', [\App\Http\Controllers\BillsController::class,'store']);
Route::get('/bills/{bill}/edit', [\App\Http\Controllers\BillsController::class,'edit']);
Route::put('/bills/{bill}', [\App\Http\Controllers\BillsController::class,'update']);
Route::delete('/bills/{bill}', [\App\Http\Controllers\BillsController::class,'destroy']);

