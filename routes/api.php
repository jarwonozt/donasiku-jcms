<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/v1/login', App\Http\Controllers\Api\LoginController::class)->name('api.login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
