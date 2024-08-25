<?php

use App\Http\Controllers\IndexController as websiteIndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Main\IndexController;

use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Admin\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Admin\Category\DeleteController as AdminCategoryDeleteController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/website", [websiteIndexController::class, "__invoke"]);

route::group(["namespace" => "Admin", "prefix" => "admin"], function () {

    Route::get("/", [IndexController::class, "__invoke"])->name("main.index");

    route::group(["namespace" => "Category", "prefix" => "categories"], function () {
        Route::get('/', [AdminCategoryIndexController::class, "__invoke"])->name("admin.categories.index");
        Route::get('/create', [AdminCategoryCreateController::class, "__invoke"])->name("admin.categories.create");
        Route::post('/', [AdminCategoryStoreController::class, "__invoke"])->name("admin.categories.store");
        Route::get('/{category}', [AdminCategoryShowController::class, "__invoke"])->name("admin.categories.show");
        Route::get('/{category}/edit', [AdminCategoryEditController::class, "__invoke"])->name("admin.categories.edit");
        Route::patch('/{category}', [AdminCategoryUpdateController::class, "__invoke"])->name("admin.categories.update");
        Route::delete('/{category}', [AdminCategoryDeleteController::class, "__invoke"])->name("admin.categories.delete");
    });


});