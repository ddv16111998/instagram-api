<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('feels', \App\Http\Controllers\FeelsController::class)->only('index');
Route::resource('acts', \App\Http\Controllers\ActsController::class)->only('index');
Route::resource('posts', \App\Http\Controllers\PostsController::class);
