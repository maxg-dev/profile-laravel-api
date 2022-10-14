<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
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

Route::get('/personas',[PersonaController::class,'index']);
Route::get('/personas/{persona}',[PersonaController::class,'show']);
Route::post('/personas',[PersonaController::class,'store']);
Route::put('/personas/{persona}',[PersonaController::class,'update']);
Route::delete('/personas/{persona}',[ProductosController::class,'destroy']);

// Route::apiResource('/personas',PersonaController::class);
