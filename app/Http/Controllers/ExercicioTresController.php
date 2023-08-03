<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioTresFormRequest;
use Illuminate\Http\Request;

class ExercicioTresController extends Controller
{
    public function mediaAritmetica(ExercicioTresFormRequest $request){
        $numeroum = $request->primeiro_numero;
        $numerodois = $request->segundo_numero;
        $numerotres = $request->terceiro_numero;

        return json_encode([
            'media aritmética' =>($numeroum+$numerodois+$numerotres)/3
        ]);

    }
}
