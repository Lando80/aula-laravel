<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     echo "olá enfermeira";
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/sobre-nos', [HomeController::class, 'sobrenos']);
Route::get('/contato', [HomeController::class, 'contato']);

//Rota da aula 05
Route::get('/aula05', [HomeController::class, 'aula05index']);
Route::post('/aula05/bemvindo', [HomeController::class, 'aula05bemvindo']);
Route::get('/aula05/bemvindo', [HomeController::class, 'aula05bemvindo']);

// Rotas da aula 04
Route::get('/aula04', [HomeController::class, 'aula04home']);
Route::get('/aula04/sobre-nos', [HomeController::class, 'aula04sobrenos']);
Route::get('/aula04/contato', [HomeController::class, 'aula04contato']);
Route::get('/aula04/usuario/{codigo}/', [HomeController::class, 'usuario']);

//Documentação Laravel
Route::get('/laravel', function(){
    return view ( view: 'welcome');
});
