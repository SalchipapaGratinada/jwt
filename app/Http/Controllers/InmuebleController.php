<?php

namespace App\Http\Controllers;

use App\Models\Inmueble;
use Illuminate\Http\Request;
use Carbon\Carbon;



class InmuebleController extends Controller
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
        return Inmueble::all();
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

        Inmueble::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Inmueble Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Inmueble::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $inmueble = Inmueble::find($id);
        $inmueble->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Inmueble Fue Actualizado Con Exito.', $inmueble];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inmueble = Inmueble::find($id);
        $inmueble->delete();
        return['Estado:' => true, 'Msj:' => 'El Inmueble Fue Eliminado Con Exito.'];
    }
}
