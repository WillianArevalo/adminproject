<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get("/", "index")->name("home");
});

Route::controller(ProjectController::class)->group(function () {
    Route::get("/projects", "index")->name("projects.index");
    Route::get("/projects/create", "create")->name("projects.create");
    Route::post("/projects/store", "store")->name("projects.store");
});


Route::controller(LanguageController::class)->group(function () {
    Route::get("/languages", "index")->name("languages");
    Route::post("/languages/store", "store")->name("languages.store");
});
