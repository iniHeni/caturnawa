<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\orderkdbiController;
use App\Http\Controllers\orderlktiController;
use App\Http\Controllers\ordersmController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/midtrans-callback', [OrderController::class, 'callback']);
Route::post('/midtrans-callback', [orderkdbiController::class, 'callbackk']);
Route::post('/midtrans-callback', [orderlktiController::class, 'callbackl']);
Route::post('/midtrans-callback', [ordersmController::class, 'callbacks']);

