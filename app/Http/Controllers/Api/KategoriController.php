<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $kategoris = Kategori::all();

            return response()->json([
                'success' => true,
                'message' => 'Kategoris retrieved successfully.',
                'data' => $kategoris,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve kategoris.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:kategoris,name',
        ]);

        try {
            $kategori = Kategori::create([
                'name' => $validatedData['name'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Kategori created successfully.',
                'data' => $kategori,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create kategori.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $kategori = Kategori::find($id);

            if (!$kategori) {
                return response()->json([
                    'success' => false,
                    'message' => "Kategori with ID {$id} not found.",
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Kategori retrieved successfully.',
                'data' => $kategori,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve kategori.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255|unique:kategoris,name,' . $id,
        ]);

        try {
            $kategori = Kategori::find($id);

            if (!$kategori) {
                return response()->json([
                    'success' => false,
                    'message' => "Kategori with ID {$id} not found.",
                ], 404);
            }

            $kategori->update([
                'name' => $validatedData['name'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Kategori updated successfully.',
                'data' => $kategori,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update kategori.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $kategori = Kategori::find($id);

            if (!$kategori) {
                return response()->json([
                    'success' => false,
                    'message' => "Kategori with ID {$id} not found.",
                ], 404);
            }

            $kategori->delete();

            return response()->json([
                'success' => true,
                'message' => 'Kategori deleted successfully.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete kategori.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}
