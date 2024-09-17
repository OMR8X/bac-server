<?php

use App\Http\Controllers;
use App\Http\Controllers\Files\DeleteFileController;
use App\Http\Controllers\Files\SearchController;
use App\Http\Controllers\Files\SelectFileController;
use App\Http\Controllers\Files\UpdateFileController;
use App\Http\Controllers\Files\UploadFileController;
use App\Http\Controllers\Managers\MaterialsController;
use App\Http\Controllers\Managers\TeachersController;
use App\Http\Controllers\Managers\SchoolsController;
use App\Http\Controllers\Managers\CategoriesController;
use App\Http\Controllers\Managers\ManagersController;
use App\Http\Controllers\Managers\SectionsController;

use Illuminate\Support\Facades\Route;

// Managers
Route::group(["prefix" => "/managers"], function () {});

// Files
Route::group(["prefix" => "/files"], function () {});
// 
// 
// 
// 
// 
// 
// 