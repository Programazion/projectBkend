<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\ContactoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/peticion', [ContactoController::class,'read']);
Route::post('/respuesta', [ContactoController::class,'create']);
Route::put('/actualizacion', [ContactoController::class,'update']);
Route::delete('/borrar', [ContactoController::class,'delete']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

