<?php

use Illuminate\Support\Facades\Route;
// use ruta controller

Route::get('/', [::class, 'index']);
Route::post('/calculator', [::class, 'calculator']);