<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\TrabajadorController;
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

Route::post('login', [AuthController::class, 'authenticate']);
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => ['jwt.verify']], function() {

    Route::apiResource('dependencias', DependenciaController::class);
    Route::apiResource('trabajadores', TrabajadorController::class);
    Route::apiResource('tareas', TareaController::class);
    Route::post('cambiarEstadoTarea', [TareaController::class, 'cambiarEstado']);
});


