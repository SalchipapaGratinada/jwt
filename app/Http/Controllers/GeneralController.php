<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;
use Carbon\Carbon;


class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return General::all();
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

        General::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El General Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        return General::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $general = General::find($id);
        $general->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El General Fue Actualizado Con Exito.', $general];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $general = General::find($id);
        $general->delete();
        return['Estado:' => true, 'Msj:' => 'El General Fue Eliminado Con Exito.'];
    }
}
