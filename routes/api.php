<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('exercicio/um', [ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', [ExercicioDoisController::class, 'retornarMaior']);
