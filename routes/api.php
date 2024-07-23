<?php

use App\Models\postapi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostapiController;
use App\Http\Controllers\AuthapiController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource('postapi', PostapiController::class);

Route::post('/register', [AuthapiController::class, 'register']);
Route::post('/login', [AuthapiController::class, 'login']);
Route::post('/logout', [AuthapiController::class, 'logout'])->middleware('auth:sanctum');
