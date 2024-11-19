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
        //form validation

        $request->validate([
            'check_sum' => 'required_without_all:check_subtraction,check_multiplication,check_division|',
            'check_subtraction' => 'required_without_all:check_sum,check_multiplication,check_division|',
            'check_multiplication' => 'required_without_all:check_subtraction,check_sum,check_division|',
            'check_division' => 'required_without_all:check_subtraction,check_multiplication,check_sum|',
            'number_one' => 'required|integer|min:0|max:999',
            'number_two' => 'required|integer|min:0|max:999',
            'number_exercises' => 'required|integer|min:5|max:50'
        ]);

        dd($request->all());

    }
//Imprimir
    public function printExercises() {

    }

//Exporta-los
    public function exportExercises() {

    }
}
