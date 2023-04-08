<?php

namespace App\Http\Controllers;

use App\Models\Sedes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SedesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Sedes::all();
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

        Sedes::create($request->all());
        return['Estado:' => true, 'Msj:' => 'La Sede Fue Creada Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Sedes::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $sede = Sedes::find($id);
        $sede->update($request->all());
        return['Estado:' => true, 'Msj:' => 'La Sede Fue Actualizado Con Exito.', $sede];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sede = Sedes::find($id);
        $sede->delete();
        return['Estado:' => true, 'Msj:' => 'La Sede Fue Eliminada Con Exito.'];
    }
}
