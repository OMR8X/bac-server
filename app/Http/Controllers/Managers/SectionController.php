<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSectionRequest;
use App\Http\Requests\UpdateSectionRequest;
use App\Models\Section;

class SectionController extends Controller
{

    public function index()
    {
        // 
        $entities = Section::all();

        // 
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }


    public function store(StoreSectionRequest $request)
    {
        // 
        $validatedData = $request->validated();

        //
        $entity = Section::create($validatedData);

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
        $entity = Section::findOrFail($id);

        // 
        return response()->json([
            'status' => 'success',
         'data' => [$entity],
        ], 200);
    }


    public function update(UpdateSectionRequest $request, string $id)
    {
        // 
        $entity = Section::findOrFail($id);

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
        $entity = Section::findOrFail($id);

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
