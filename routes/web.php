<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'home'])->name('home');

Route::post('/generateExercises', [MainController::class, 'generateExercises'])->name('generateExercises');

Route::get('/printExercises', [MainController::class, 'printExercises'])->name('printExercises');

Route::get('/exportExercises', [MainController::class, 'exportExercises'])->name('exportExercises');
