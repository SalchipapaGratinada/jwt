<?php

namespace App\Http\Controllers;

use App\Models\Mueble;
use Illuminate\Http\Request;
use Carbon\Carbon;


class MuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Mueble::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_creacion'=>$fechaActual]);
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        Mueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Mueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $mueble = Mueble::find($id);
        $mueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Actualizado Con Exito.', $mueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $mueble = Mueble::find($id);
        $mueble->delete();
        return['Estado:' => true, 'Msj:' => 'El Mueble Fue Eliminado Con Exito.'];
    }
}
