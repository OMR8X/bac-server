<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFileCategoryRequest;
use App\Http\Requests\UpdateFileCategoryRequest;
use App\Models\FileCategory;

class FileCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFileCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(FileCategory $fileCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileCategoryRequest $request, FileCategory $fileCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FileCategory $fileCategory)
    {
        //
    }
}
