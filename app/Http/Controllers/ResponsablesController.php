<?php

namespace App\Http\Controllers;

use App\Models\Responsables;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ResponsablesController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['index']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = array(
            'status'=> true,
            'data'=> Responsables::all()
        );
        return json_encode($response);
        /* return Responsables::all(); */
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

        Responsables::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Responsable Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Responsables::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['fecha_modificacion'=>$fechaActual]);

        $responsable = Responsables::find($id);
        $responsable->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Responsable Fue Actualizado Con Exito.', $responsable];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $responsable = Responsables::find($id);
        $responsable->delete();
        return['Estado:' => true, 'Msj:' => 'El Responsable Fue Eliminado Con Exito.'];
    }
}
