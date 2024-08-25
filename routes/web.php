<?php

use App\Http\Controllers\IndexController as websiteIndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Main\IndexController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/website", [websiteIndexController::class, "__invoke"]);

route::group(["prefix" => "admin"], function () {

    Route::get("/", [IndexController::class, "__invoke"])->name("main.index");

});