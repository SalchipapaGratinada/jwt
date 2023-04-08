<?php

namespace App\Http\Controllers;

use App\Models\UbicacionMueble;
use Illuminate\Http\Request;
use Carbon\Carbon;

class UbicacionMuebleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UbicacionMueble::all();
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

        UbicacionMueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'La Ubicacion Mueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return UbicacionMueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $ubicacionmueble = UbicacionMueble::find($id);
        $ubicacionmueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'La Ubicacion Mueble Fue Actualizado Con Exito.', $ubicacionmueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ubicacionmueble = UbicacionMueble::find($id);
        $ubicacionmueble->delete();
        return['Estado:' => true, 'Msj:' => 'La Ubicacion Mueble Fue Eliminado Con Exito.'];
    }
}
