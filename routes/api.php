<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeatController;
use App\Http\Controllers\GenreController;
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
// No authentication

//Beats
Route::get('/beats', [BeatController::class, 'index']);
Route::get('/beats/{id}', [BeatController::class, 'show']);
Route::get('/beats/search/{name}', [BeatController::class, 'search']);
Route::get('/genre/{id}', [BeatController::class, 'filterGenre']);

//Genres
Route::get('/genres', [GenreController::class, 'index']);

//Authenticated
Route::post('/beats', [BeatController::class, 'store']);
Route::put('/beats/{id}', [BeatController::class, 'update']);
Route::delete('/beats/{id}', [BeatController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
