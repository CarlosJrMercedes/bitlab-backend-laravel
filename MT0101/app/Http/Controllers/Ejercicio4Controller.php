<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio4Controller extends Controller
{
    //
    public function result()
    {
        $result =[];
        $dos = 2;
        for($i=25;$i>=0;$i--){

            $result[$i]=  $i."entre 2 es igual a ".round($i/$dos, 0, PHP_ROUND_HALF_DOWN). " y me sobra ". $i%$dos;

        }
        return view("ejercicio4.respuesta",['result'=>$result]);
    }
}
