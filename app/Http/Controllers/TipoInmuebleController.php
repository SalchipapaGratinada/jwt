<?php

namespace App\Http\Controllers;

use App\Models\TipoInmueble;
use Illuminate\Http\Request;
use Carbon\Carbon;


class TipoInmuebleController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TipoInmueble::all();
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

        TipoInmueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Tipo Inmueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return TipoInmueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $tipoinmueble = TipoInmueble::find($id);
        $tipoinmueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Tipo Inmueble Fue Actualizado Con Exito.', $tipoinmueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $tipoinmueble = TipoInmueble::find($id);
        $tipoinmueble->delete();
        return['Estado:' => true, 'Msj:' => 'El Tipo Inmueble Fue Eliminado Con Exito.'];
    }
}
