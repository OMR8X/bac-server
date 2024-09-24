<?php

namespace App\Http\Controllers\Files;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use DB;
use Storage;



class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $entities = File::all();

        //
        return response()->json([
            'status' => 'success',
            'data' => $entities
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFileRequest $request)
    {
        //
        $validatedData = $request->validated();

        //
        $entity = File::create($validatedData);

        //
        return response()->json([
            'status' => 'success',
            'message' => 'Entity created successfully',
            'data' => [$entity],
        ], 201);  // 201 => resource was successfully created
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $entity = File::findOrFail($id);
        //
        return response()->json([
            'status' => 'success',
            'data' => [$entity],
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFileRequest $request, string $id)
    {
        //
        $entity = File::findOrFail($id);

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $entity = File::findOrFail($id);

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
