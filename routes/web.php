<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calculator']);