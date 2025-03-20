<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Regazine;
use Illuminate\Http\Request;

class RegazineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $regazines = Regazine::with(['media'])->paginate(8); // Fetch regazines with media relationships

            return response()->json([
                'success' => true,
                'message' => 'Regazines retrieved successfully.',
                'data' => $regazines,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve regazines.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $regazine = Regazine::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Regazine created successfully.',
                'data' => $regazine,
            ], 201); // HTTP 201 Created
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create regazine.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $regazine = Regazine::with(['media'])->find($id);

            if (!$regazine) {
                return response()->json([
                    'success' => false,
                    'message' => "Regazine with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            return response()->json([
                'success' => true,
                'message' => 'Regazine retrieved successfully.',
                'data' => $regazine,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve regazine.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
        ]);

        try {
            $regazine = Regazine::find($id);

            if (!$regazine) {
                return response()->json([
                    'success' => false,
                    'message' => "Regazine with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $regazine->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Regazine updated successfully.',
                'data' => $regazine,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update regazine.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $regazine = Regazine::find($id);

            if (!$regazine) {
                return response()->json([
                    'success' => false,
                    'message' => "Regazine with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $regazine->delete();

            return response()->json([
                'success' => true,
                'message' => 'Regazine deleted successfully.',
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete regazine.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }
}
