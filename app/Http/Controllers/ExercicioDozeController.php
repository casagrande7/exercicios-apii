<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioDozeController extends Controller
{
    public function numerosDecrescentes()
    {
        $numeros = []; 

        for ($i = 80; $i >= 1; $i--) {
          array_push($numeros, $i);
        }

        return json_encode([
            'valores'=> $numeros
        ]);
    }
}
