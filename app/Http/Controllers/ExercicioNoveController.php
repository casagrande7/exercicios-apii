<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioNoveFormRequest;
use Illuminate\Http\Request;

class ExercicioNoveController extends Controller
{
    public function divisao(ExercicioNoveFormRequest $request){
        $numeros = []; 

        for ($i = 1; $i <= 100; $i++) {
            if($i % $request->entrada ==0){
                array_push($numeros, $i);
            }
    }
    return json_encode([
        'valores' =>$numeros
    ]);

    }
}
