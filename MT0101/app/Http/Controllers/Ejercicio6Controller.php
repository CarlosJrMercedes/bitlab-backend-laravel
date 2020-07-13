<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio6Controller extends Controller
{
    //
    public function result(Request $request)
    {

        $result = [];
        for($i=$request->num;$i>0;$i-- ):

            if($i%2 ==0){
                $result[] = "El número \"{$i}\" es primo";
            }else{
                $result[] = "El número \"{$i}\" no es primo";
            }
        endfor;

        return view("ejercicio6.respuesta",['result'=> $result]);
    }
}
