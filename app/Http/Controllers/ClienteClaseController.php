<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteClaseController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        
      return view("asistencias.index", compact("clientes"));
                    
    }
    public function create()
    {
        return view("asistencias.create");                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
    }
    public function store(Request $request)
    {
        $clientes = Cliente::create($request->all());

        return redirect (route("Asistencia.index"));
    }
    public function show()
    {
        //
    }
    public function edit($id)
    {
        dd( $id);
        return view("asistencias.create");
    }
    public function update(Request $request,  $id)
    {
        //
    }
    public function destroy( $id)
    {
        //
    }
}
