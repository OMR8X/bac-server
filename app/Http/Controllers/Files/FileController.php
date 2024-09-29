<?php

namespace App\Http\Controllers\Files;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFileRequest;
use App\Http\Requests\UpdateFileRequest;
use App\Models\File;
use DB;
use Request;
use Storage;



class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Set the default per-page value
        $perPage = 20;

        // Start the query
        $query = File::query();

        // Optional: Add a filter for 'keywords'
        if ($request->filled('keywords')) {
            // Trim the keywords to remove any leading/trailing spaces
            $keywords = array_filter(explode(' ', trim($request->input('keywords'))));

            // Apply a 'where' condition for each keyword if keywords are not empty
            if (!empty($keywords)) {
                $query->where(function($q) use ($keywords) {
                    foreach ($keywords as $word) {
                        $q->orWhere('title', 'like', '%' . $word . '%');
                    }
                });
            }
        }

        // Apply sorting, with optional dynamic sorting parameters
        $sortBy = $request->input('sort_by', 'created_at');
        $sortOrder = $request->input('sort_order', 'desc');
        //
        $query->orderBy($sortBy, $sortOrder);

        // Paginate the results
        $entities = $query->paginate($perPage);

        // Return response
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
