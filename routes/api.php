<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\RegazineController;
use App\Http\Controllers\Api\TestimoniController;
use App\Http\Controllers\Api\PortofolioController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', UserController::class)->middleware('auth:sanctum');
Route::apiResource('kategori', KategoriController::class);
Route::apiResource('portofolio', PortofolioController::class);
Route::apiResource('testimoni', TestimoniController::class);
Route::apiResource('regazine', RegazineController::class);
