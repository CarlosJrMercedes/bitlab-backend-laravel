<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio7Controller extends Controller
{
    //
    public function result(Request $request)
    {
        $books=["Largo pétalo de mar de Matilde Asensi ","Los asquerosos de Santiago Lorenzo",
        "Lectura fácil de Cristina Morales","Tiempos recios de Mario Vargas Llosa ",
        "El pintor de almas de Idelfonso Falcones ","Alegría de Manuel Vilas"
        ,"Loba Negra, de Juan Gómez-Jurado","Terra Alta de Javier Cercas",
        "La cara norte del corazón de Dolores Redondo","Sidi de Arturo Pérez Reverte"];

        $cant = $request->num;
        $seleccion = [];
        $restantes = [];
        for ($i=0; $i < $cant; $i++) { 
            $aleatorio = array_rand($books);
            $seleccion[] = $books[$aleatorio];
            unset($books[$aleatorio]);
            if ($i== $cant-1) {
                foreach($books as $b){
                    $restantes[] = $b;
                }
            }
            
        }

        return view("ejercicio7.respuesta",['seleccion'=> $seleccion, 'restantes'=>$restantes]);
    }
}
