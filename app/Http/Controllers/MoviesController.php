<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public function index() {
        return Movie::all();
    }

    public function show(Movie $movie) {
        return $movie;
    }
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required|unique:products|max:255',
            'year' => 'required|numeric',
            'category' => 'required|string',
            'info' => 'string',
            'summary' => 'string',
            'availability' => 'boolean',
        ]);
        $movie = Movie::create($request->all());
        return response()->json([
                'movie' => $movie,
                'message' =>  'New Movie have been created successfully...'
        ], 201);
    }
    public function update(Request $request, Movie $movie) {
        $movie->update($request->all());
        return response()->json([
            'message' => 'The Movie have been updated successfully'
        ], 200);
    }

    public function delete(Movie $movie) {
        $movie->delete();
        return response()->json([
            'message' => 'The Movie have been deleted successfully'
        ], 204);
    }

}


