<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreSchoolRequest;
use App\Http\Requests\UpdateSchoolRequest;
use App\Models\School;

class SchoolController extends Controller
{

    public function index()
    {
        // 
        $entities = School::all();

        // 
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }


    public function store(StoreSchoolRequest $request)
    {
        // 
        $validatedData = $request->validated();

        //
        $entity = School::create($validatedData);

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
        $entity = School::findOrFail($id);

        // 
        return response()->json([
            'status' => 'success',
         'data' => [$entity],
        ], 200);
    }


    public function update(UpdateSchoolRequest $request, string $id)
    {
        // 
        $entity = School::findOrFail($id);

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
        $entity = School::findOrFail($id);

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
