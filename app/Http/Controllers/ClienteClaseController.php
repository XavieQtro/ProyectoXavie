<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\ClienteClase;

class ClienteClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::all();
        $clientes = Cliente::all();
        // dd($clientesclases);

        return view("asistencias.index", compact("clases", "clientes"));
    }
    public function create()
    {
        $clientes = Cliente::all();
        $clases = Clase::all();

        return view("asistencias.inscripcion", compact("clientes", "clases"));
    }
    public function store(Request $request)
    {
        $registroAsistencia = $request->all();

        ClienteClase::create([
            "cliente_id" => $registroAsistencia["cliente_id"],
            "clase_id" => $registroAsistencia["clase_id"]
        ]);

        return redirect(route("Asistencia.index"));
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        dd($id);
        return view("asistencias.create");
    }
    public function update(Request $request,  $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
