<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        // 
        $entities = Category::all();

        // 
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }


    public function store(StoreCategoryRequest $request)
    {
        // 
        $validatedData = $request->validated();

        //
        $entity = Category::create($validatedData);

        //
        return response()->json([
            'status' => 'success',
            'message' => 'Entity created successfully',
            'data' => [$entity],
        ], 201);  // 201 => resource was successfully created
    }



    public function show(string $id)
    {
        // 
        $entity = Category::findOrFail($id);

        // 
        return response()->json([
            'status' => 'success',
            'data' => [$entity],
        ], 200);
    }


    public function update(UpdateCategoryRequest $request, string $id)
    {
        // 
        $entity = Category::findOrFail($id);

        // 
        $validatedData = $request->validated();

        // 
        $entity->update($validatedData);

        // 
        return response()->json([
            'status' => 'success',
            'message' => 'Entity updated successfully',
            'data' => [$entity],
        ], 200);
    }


    public function destroy(string $id)
    {
        //
        $entity = Category::findOrFail($id);

        // 
        $entity->delete();

        //
        return response()->json([
            'status' => 'success',
            'message' => 'Entity deleted successfully',
            'data' => [$entity],
        ], 200);
    }
}
