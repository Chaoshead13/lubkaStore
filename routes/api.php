<?php

use App\Http\Controllers\API\Product\IndexController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::GET("/products", [IndexController::class, "__invoke"]);