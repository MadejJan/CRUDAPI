<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

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
Route::put('/Madej/54461/people/{id}', [PeopleController::class, 'edit']);
Route::get('/Madej/54461/people', [PeopleController::class, 'index']);
Route::get('/Madej/54461/people/{id}', [PeopleController::class, 'show']);
Route::post('/Madej/54461/people', [PeopleController::class, 'create']);
Route::delete('/Madej/54461/people/{id}', [PeopleController::class, 'delete']);

