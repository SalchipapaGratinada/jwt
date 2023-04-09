<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;


class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt', ['except' => ['store']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['created_at'=>$fechaActual]);
        $request->merge(['updated_at'=>$fechaActual]);

        $user = new User(request()->all());
        $user->password = bcrypt($user->password);

        $request->merge(['password'=>$user->password]);

        User::create($request->all());
        return['Estado:' => true, 'Msj:' => 'El Usuario Fue Creado Con Exito.'];
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return User::find($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $fechaActual = Carbon::now();
        $fechaActual = Carbon::now()->format('Y-m-d H:i:s');
        $request->merge(['updated_at'=>$fechaActual]);

        $user = new User(request()->all());
        $user->password = bcrypt($user->password);
        $request->merge(['password'=>$user->password]);


        $usuario = User::find($id);
        $usuario->update($request->all());
        return['Estado:' => true, 'Msj:' => 'El Usuario Fue Actualizado Con Exito.', $usuario];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();
        return['Estado:' => true, 'Msj:' => 'El Usuario Fue Eliminado Con Exito.'];
    }
}
