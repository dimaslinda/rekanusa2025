<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $testimonis = Testimoni::paginate(8); // Paginate testimonials

            return response()->json([
                'success' => true,
                'message' => 'Testimonials retrieved successfully.',
                'data' => $testimonis,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve testimonials.',
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
            'name' => 'required|string|max:255', // Name of the person giving the testimonial
            'content' => 'required|string',      // Testimonial content
            'rating' => 'required|integer|between:1,5', // Rating between 1 and 5
        ]);

        try {
            $testimoni = Testimoni::create([
                'name' => $validatedData['name'],
                'content' => $validatedData['content'],
                'rating' => $validatedData['rating'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Testimonial created successfully.',
                'data' => $testimoni,
            ], 201); // HTTP 201 Created
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create testimonial.',
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
            $testimoni = Testimoni::find($id);

            if (!$testimoni) {
                return response()->json([
                    'success' => false,
                    'message' => "Testimonial with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            return response()->json([
                'success' => true,
                'message' => 'Testimonial retrieved successfully.',
                'data' => $testimoni,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve testimonial.',
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
            'name' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
            'rating' => 'sometimes|required|integer|between:1,5',
        ]);

        try {
            $testimoni = Testimoni::find($id);

            if (!$testimoni) {
                return response()->json([
                    'success' => false,
                    'message' => "Testimonial with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $testimoni->update($validatedData);

            return response()->json([
                'success' => true,
                'message' => 'Testimonial updated successfully.',
                'data' => $testimoni,
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update testimonial.',
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
            $testimoni = Testimoni::find($id);

            if (!$testimoni) {
                return response()->json([
                    'success' => false,
                    'message' => "Testimonial with ID {$id} not found.",
                ], 404); // HTTP 404 Not Found
            }

            $testimoni->delete();

            return response()->json([
                'success' => true,
                'message' => 'Testimonial deleted successfully.',
            ], 200); // HTTP 200 OK
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete testimonial.',
                'error' => $e->getMessage(),
            ], 500); // HTTP 500 Internal Server Error
        }
    }
}
