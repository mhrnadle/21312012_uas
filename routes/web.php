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
    return view('welcome');
});

Route::get('/21312012', [UasController::class,'index']);
Route::get('/21312012/create', [UasController::class,'create']);
Route::post('/21312012', [UasController::class,'store']);
Route::get('/21312012/{21312012_id}/edit', [UasController::class,'edit']);
Route::put('/21312012/{21312012_id}', [UasController::class,'update']);
Route::delete('/21312012/{21312012_id}', [UasController::class,'destroy']);
