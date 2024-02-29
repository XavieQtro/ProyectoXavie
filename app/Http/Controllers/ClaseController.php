<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\ClienteClase;


class ClaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $clientes = Cliente::all();
        
       // dd($clienteclases);

        return view("clases.index", compact("clientes"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::all();
        $clases = Clase::all();
        return view("clases.create", compact("clientes","clases"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $clienteclase = ClienteClase::create($request->all());

        return redirect (route("Asistencia.index"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
