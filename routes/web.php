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

Route::get('/npm', [NpmController::class,'index']);
Route::get('/npm/create', [NpmController::class,'create']);
Route::post('/npm', [NpmController::class,'store']);
Route::get('/npm/{npm_id}/edit', [NpmController::class,'edit']);
Route::put('/npm/{npm_id}', [NpmController::class,'update']);
Route::delete('/npm/{npm_id}', [NpmController::class,'destroy']);
