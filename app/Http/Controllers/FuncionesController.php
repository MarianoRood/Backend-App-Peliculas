<?php

namespace App\Http\Controllers;

use App\Models\Funciones;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FuncionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = new Carbon('yesterday');
        $date_end = $date->format('Y-m-d');

        $funciones = Funciones::with('peliculas', 'salas')->where('date_function', $date_end)->get();
        return response()->json($funciones, 200);
    }

    public function get_functions_peliculas(Request $request){
        $pelicula_id = $request->json('pelicula_id');

        // Realizar la consulta utilizando el valor obtenido
        $funciones = Funciones::with('peliculas', 'salas')->where('pelicula_id', $pelicula_id)->get();

        // Retornar la respuesta JSON con el valor de $categoria_id
        return response()->json($funciones, 200);
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
    public function show(Funciones $funciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Funciones $funciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Funciones $funciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Funciones $funciones)
    {
        //
    }
}
