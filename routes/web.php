<?php

use App\Http\Controllers\RegionController;
use Illuminate\Support\Facades\Route;



Route::get('/', [RegionController::class, 'index'])->name('index');
Route::get('/provincia-regioni/{nome}', [RegionController::class, 'show'])->name('show');


//Estrazione
//Incapsulamento
//Astrazione (?)

//Una classe PHP deve essere chiamata con:
//Nome Inglese
//Prima lettera maiuscola
//Singolare

// Route::get('/potenza', function () {
//     return view('potenza');
// })->name('potenza');

// Route::get('/matera', function () {
//     return view('matera');
// })->name('matera');