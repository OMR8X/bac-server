<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Models\Material;

class MaterialController extends Controller
{

    public function index()
    {
        // 
        $entities = Material::all();

        // 
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }


    public function store(StoreMaterialRequest $request)
    {
        // 
        $validatedData = $request->validated();

        //
        $entity = Material::create($validatedData);

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
        $entity = Material::findOrFail($id);

        // 
        return response()->json([
            'status' => 'success',
           'data' => [$entity],
        ], 200);
    }


    public function update(UpdateMaterialRequest $request, string $id)
    {
        // 
        $entity = Material::findOrFail($id);

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
        $entity = Material::findOrFail($id);

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
