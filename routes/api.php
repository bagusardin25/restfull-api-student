<?php

use Illuminate\Http\Request;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('students', \App\Http\Controllers\StudentController::class);
