<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio5Controller extends Controller
{
    //
    public function result(Request $request)
    {
        $edades = explode(",",$request->edades);
        $valores = array_count_values($edades);

        return view("ejercicio5.respuesta",['result'=> $valores,"edades"=> $edades]);
    }
}
