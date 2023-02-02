<?php

use App\Http\Controllers\MoviesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

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

/**
** Basic Routes for a RESTful service:
**
** Route::get($uri, $callback);
** Route::post($uri, $callback);
** Route::put($uri, $callback);
** Route::delete($uri, $callback);
**
**/

Route::get('movies', [MoviesController::class, 'index']);

Route::get('movies/{movie}', [MoviesController::class, 'show']);

Route::post('movies', [MoviesController::class, 'store']);

Route::put('movies/{movie}', [MoviesController::class, 'update']);

Route::delete('movies/{movie}',[MoviesController::class, 'delete']);


