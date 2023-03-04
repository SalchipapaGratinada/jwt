<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class MensajesController extends Controller
{
    public function __construct()
    {
        $this->middleware('jwt');
    }
    /* public function __construct()
    {
        $this->middleware('auth:api');
    } */

    public function informacion(){
        return response()->json(['msj' => 'Primer Corte universidad De La Costa CUC.']);
    }
    public function fecha(){
        $date = Carbon::now();
        return response()->json(['fecha' => $date]);
    }
}
