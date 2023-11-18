<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;
use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peliculas = Peliculas::with('categorias', 'director')->get();
        return response()->json($peliculas, 200);
    }

    public function index_post()
    {
        $peliculas = Peliculas::with('categorias', 'director')->get();
        return response()->json($peliculas, 200);
    }

    public function peliculasxcategoria(Request $request)
    {


        //$requestBody = $request->getContent();
        //dd($requestBody);
        // Obtener el valor de 'categoria' desde el cuerpo JSON de la solicitud
        $categoria_id = $request->json('categoria');

        // Realizar la consulta utilizando el valor obtenido
        $peliculas = Peliculas::with('categorias', 'director')->where('categorie_id', $categoria_id)->get();

        // Retornar la respuesta JSON con el valor de $categoria_id
        return response()->json($peliculas, 200);
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
    public function show(Peliculas $peliculas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peliculas $peliculas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peliculas $peliculas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peliculas $peliculas)
    {
        //
    }
}
