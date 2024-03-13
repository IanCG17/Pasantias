<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes= Cliente::all();
        return $clientes;
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente= new Cliente();
        $cliente -> nombre = $request-> nombre;
        $cliente -> cedula = $request-> Cedula;
        $cliente -> edad = $request-> edad;
        $cliente -> correo = $request-> correo;
        $cliente -> Rango_de_fecha = $request-> Rango_de_fecha;

        $cliente -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cliente =Cliente::find($id);
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::findOrFail($request->id);
        $cliente -> nombre = $request-> nombre;
        $cliente -> cedula = $request-> Cedula;
        $cliente -> edad = $request-> edad;
        $cliente -> correo = $request-> correo;
        $cliente -> Rango_de_fecha = $request-> Rango_de_fecha;

        $cliente -> save();
        return $cliente;
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cliente =Cliente::destroy($id);
        return $cliente;
    }
};
