<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioSeisController extends Controller
{
    public function idade(Request $request){
        if($request->valor_primario>18){
         return json_encode([
             'mensagem' => 'É um adulto'
         ]);
        } if($request->valor_primario==12){
         return json_encode([
             'mensagem' =>'É adolescente'
         ]);
        } if($request->valor_primario<12){
         return json_encode([
             'mensagem' => 'É uma criança'
         ]);
        }
 
     }
}
