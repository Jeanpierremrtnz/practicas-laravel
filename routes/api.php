<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ParaleloController;


//RUTAS PARA ESTUDIANTES 
Route::get('/estudiantes', [EstudianteController::class, 'index']); //listar todos 
Route::post('/estudiantes', [EstudianteController::class, 'store']); //Crear
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']); //ver uno
Route::put('/estudiantes/{id}', [EstudianteController::class, 'update']); //Actualizar
Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy']); //eliminar

// RUTAS PARA PARALELOS
Route::get('/paralelos', [ParaleloController::class, 'index']); //listar todos
Route::post('/paralelos', [ParaleloController::class, 'store']); //crear
Route::get('/paralelos/{id}', [ParaleloController::class, 'show']); //ver uno
Route::put('/paralelos/{id}', [ParaleloController::class, 'update']); //actualizar
Route::delete('/paralelos/{id}', [ParaleloController::class, 'destroy']); //eliminar




//Route::get('/user', function (Request $request) {
  //  return $request->user();
//})->middleware('auth:sanctum');

Route::get('/retornar-paralelos', [ParaleloController::class , 'index']);
Route::post('/guardar-paralelo', [ParaleloController::class, 'store']);







