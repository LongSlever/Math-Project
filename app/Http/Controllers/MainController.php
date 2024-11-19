<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
//Home
    public function home(): View {
        return view('Home');
    }
//Gerar os exercícios
    public function generateExercises(Request $request) {

    }
//Imprimir
    public function printExercises() {

    }

//Exporta-los
    public function exportExercises() {

    }
}
