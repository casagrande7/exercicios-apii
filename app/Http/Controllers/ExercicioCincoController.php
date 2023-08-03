<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioCincoFormRequest;
use Illuminate\Http\Request;

class ExercicioCincoController extends Controller
{
    public function verificacao(ExercicioCincoFormRequest $request){
        if($request->numero %4 ==0){
            return json_encode([
                'mensagem' => 'É divisível por 4'
            ]);
        } else{
            return json_encode([
                'mensagem' => 'Não é divisível por 4'
            ]);
        }
}
}
