<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio8Controller extends Controller
{
    //
    public function result(Request $request)
    {
        $bisiestos = [];

        for($i= $request->uno;$i<=$request->dos;$i++){
            if($i % 100 == 0 && $i % 400 ==0 && $i % 4 == 0){
                $bisiestos []=  $i ." Es un año bisiesto ";
            }
            
    
        }
        return view("ejercicio8.respuesta",['bisiestos'=> $bisiestos,'uno'=> $request->uno,'dos'=> $request->dos]);
    }
}
