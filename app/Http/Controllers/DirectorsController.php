<?php

namespace App\Http\Controllers;

use App\Models\Directors;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Directors::get();
        return response()->json($data, 200);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Directors $directors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Directors $directors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Directors $directors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Directors $directors)
    {
        //
    }
}
