<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioOitoFormRequest;
use Illuminate\Http\Request;

class ExercicioOitoController extends Controller
{
    public function tabuada(ExercicioOitoFormRequest $request){
        $numeros = []; 

        for ($i = 1; $i <= 10; $i++) {
            $resultado=$i*$request->entrada;
            $concatenado=$request->entrada . ' X ' . $i. ' = ' . $resultado;
          array_push($numeros,$concatenado);
        }

        return json_encode([
            'valores'=> $numeros
        ]);

    }
}
