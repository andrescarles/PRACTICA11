<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorEjercicio1 extends Controller
{
    public function ej1Parametro($param1,$param2,$param3,$param4){
       $textoFinal = 'Éste es el resultado del primer ejercicio de la práctica hecha por '.$param1 .'. ';
       $textoFinal .= 'Éste es el resultado del primer ejercicio de la práctica hecha por '.$param2 .'. ';
       $textoFinal .= 'Éste es el resultado del primer ejercicio de la práctica hecha por '.$param3 .'. ';
       $textoFinal .= 'Éste es el resultado del primer ejercicio de la práctica hecha por '.$param4 .'. ';
        #return view('primeraView');
        return view('primeraView') -> with (['text' => $textoFinal ]);
    }
}
