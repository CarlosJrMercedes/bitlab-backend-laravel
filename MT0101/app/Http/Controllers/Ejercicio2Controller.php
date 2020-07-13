<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    //

    public function result(Request $request)
    {
        $frase = $request->frase;

        $minus = [];
        $mayus = [];
        for($i=0;$i < strlen($frase);$i++):
            $minus[$i] = strtolower($frase[$i]);
            $mayus[$i] = strtoupper($frase[$i]);
        endfor;

        
        return view("ejercicio2.respuesta",['minus'=> $minus,'mayus'=>$mayus]);
    }
}
