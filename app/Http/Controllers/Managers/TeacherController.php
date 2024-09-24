<?php

namespace App\Http\Controllers\Managers;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Models\Teacher;

class TeacherController extends Controller
{

    public function index()
    {
        // 
        $entities = Teacher::all();

        // 
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }


    public function store(StoreTeacherRequest $request)
    {
        // 
        $validatedData = $request->validated();

        //
        $entity = Teacher::create($validatedData);

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
        $entity = Teacher::findOrFail($id);

        // 
        return response()->json([
            'status' => 'success',
          'data' => [$entity],
        ], 200);
    }


    public function update(UpdateTeacherRequest $request, string $id)
    {
        // 
        $entity = Teacher::findOrFail($id);

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
        $entity = Teacher::findOrFail($id);

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
