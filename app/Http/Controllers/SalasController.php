<?php

namespace App\Http\Controllers;

use App\Models\Salas;
use Illuminate\Http\Request;

class SalasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Salas::get();
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
    public function show(Salas $salas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Salas $salas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Salas $salas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Salas $salas)
    {
        //
    }
}
