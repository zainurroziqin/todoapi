<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $todos = Todo::all();
        return response()->json(
            [
                'code' => 200,
                'status' => true,
                'data' => $todos
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required',
        ]);

        $todo = Todo::create($validated);
        return response()->json([
            'code' => 200,
            'status' => true,
            'data' => $todo
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(todo $todo)
    {
        return response()->json($todo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, todo $todo)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required',
        ]);


        $todo->update(
            $validated
        );
        return response()->json([
            'code' => 200,
            'status' => true,
            'data' => $todo
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(todo $todo)
    {
        $todo->delete();
        return response()->json([
            'code' => 200,
            'status' => true,
        ]);
    }
}
