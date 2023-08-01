<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/tres', [ExercicioTresController::class, 'mediaAritmetica']);

Route::post('exercicio/quatro', [ExercicioQuatrooController::class, 'verificarNumero']);

Route::post('exercicio/cinco', [ExercicioCincoController::class, 'verificacao']);

Route::post('exercicio/seis', [ExercicioSeisController::class, 'idade']);

Route::get('exercicio/sete', [ExercicioSeteController::class, 'exibirNumeros']);

Route::post('exercicio/oito', [ExercicioOitoController::class, 'tabuada']);
