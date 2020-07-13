<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio3Controller extends Controller
{
    //

    public function result(Request $request)
    {
        return view("ejercicio3.respuesta",['num'=> $request->num]);
    }
}
