<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function(){
//     echo "olá enfermeira";
// });



Route::get('/', [HomeController::class, 'index']);
Route::get('/sobre-nos', [HomeController::class, 'sobrenos']);
Route::get('contato', [HomeController::class, 'contato']);
Route::get('/usuario/{codigo}/', [HomeController::class, 'usuario']);




Route::get('/laravel', function(){
    return view ( view: 'welcome');
});