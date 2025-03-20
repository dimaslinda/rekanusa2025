<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $portofolios = Portofolio::with(['media', 'kategoris'])->paginate(8); // Include relationships

            return response()->json([
                'success' => true,
                'message' => 'Portofolios retrieved successfully.',
                'data' => $portofolios,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve portofolios.',
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
            'kategori_id' => 'required|exists:kategoris,id', // Ensure the category exists
        ]);

        try {
            $portofolio = Portofolio::create([
                'title' => $validatedData['title'],
                'description' => $validatedData['description'],
                'kategori_id' => $validatedData['kategori_id'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Portofolio created successfully.',
                'data' => $portofolio,
            ], 201); // HTTP 201 Created
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create portofolio.',
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
            $portofolio = Portofolio::with(['media', 'kategoris'])->find($id);

            if (!$portofolio) {
                return response()->json([
                    'success' => false,
                    'message' => "Portofolio with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            return response()->json([
                'success' => true,
                'message' => 'Portofolio retrieved successfully.',
                'data' => $portofolio,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve portofolio.',
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
            'kategori_id' => 'sometimes|required|exists:kategoris,id', // Ensure the category exists
        ]);

        try {
            $portofolio = Portofolio::find($id);

            if (!$portofolio) {
                return response()->json([
                    'success' => false,
                    'message' => "Portofolio with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $portofolio->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Portofolio updated successfully.',
                'data' => $portofolio,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update portofolio.',
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
            $portofolio = Portofolio::find($id);

            if (!$portofolio) {
                return response()->json([
                    'success' => false,
                    'message' => "Portofolio with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $portofolio->delete();

            return response()->json([
                'success' => true,
                'message' => 'Portofolio deleted successfully.',
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete portofolio.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }
}
