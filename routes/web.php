<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);


Route::get('/student/{id}/show', [StudentController::class, 'show']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);