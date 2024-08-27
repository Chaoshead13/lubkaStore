<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::GET("/products", [App\Http\Controllers\API\Product\IndexController::class, "__invoke"]);
Route::GET("/categories", [App\Http\Controllers\API\Category\IndexController::class, "__invoke"]);