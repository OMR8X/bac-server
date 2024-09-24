<?php

use App\Http\Controllers;


use App\Http\Controllers\Managers\CategoryController;
use App\Http\Controllers\Managers\GetAllManagersController;
use App\Http\Controllers\Managers\MaterialController;
use App\Http\Controllers\Managers\SchoolController;
use App\Http\Controllers\Managers\SectionController;
use App\Http\Controllers\Managers\TeacherController;
use Illuminate\Support\Facades\Route;

// Managers
Route::group(["prefix" => "/managers"], function () {
    //
    Route::get('', GetAllManagersController::class);
    //
    Route::resource('categories', CategoryController::class)->except([
        'create', 'edit'
    ]);
    //
    Route::resource('materials', controller: MaterialController::class)->except([
        'create', 'edit'
    ]);
    //
    Route::resource('schools', controller: SchoolController::class)->except([
        'create', 'edit'
    ]);
    //
    Route::resource('sections', controller: SectionController::class)->except([
        'create', 'edit'
    ]);
    //
    Route::resource('teachers', controller: TeacherController::class)->except([
        'create', 'edit'
    ]);


});

// Files
Route::group(["prefix" => "/files"], function () {});
