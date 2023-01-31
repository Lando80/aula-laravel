<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     echo "olá enfermeira";
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/sobre-nos', [HomeController::class, 'sobrenos']);
Route::get('contato', [HomeController::class, 'contato']);

Route::get('/bemvindo', [HomeController::class, 'bemvindo']);
Route::post('/bemvindo', [HomeController::class, 'bemvindo']);


Route::get('/laravel', function(){
    return view ( view: 'welcome');
});

// Rotas da aula 04
Route::get('/aula04', [HomeController::class, 'aula04home']);
Route::get('/aula04/sobre-nos', [HomeController::class, 'aula04sobrenos']);
Route::get('/aula04/contato', [HomeController::class, 'aula04contato']);
Route::get('/aula04/usuario/{codigo}/', [HomeController::class, 'usuario']);