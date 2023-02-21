<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

//Documentação Laravel
Route::get('/laravel', function(){
    return view ( view: 'welcome');
});


// Route::get('/', function(){
//     return view('');
// });

Route::get('/', [HomeController::class, 'index']);



//Listar todos os produtos
Route::get('/produtos', [ProdutoController::class, 'index']);

//Exibir formulário de criação
Route::get('/produtos/create', [ProdutoController::class, 'create']);

//Exibir um produto expecíficos
Route::get('produtos/{id}', [ProdutoController::class, 'edit']);

//Criar produtos
Route::post('/produtos', [ProdutoController::class, 'store']);

//Atualizar um produto expecifico
Route::put('/produtos/{id}', [ProdutoController::class, 'update']);

//Excluir um produto expecífico
Route::delete('/produtos/{id}', [ProdutoController::class, 'destroy']);



//Aula07
Route::get('/aula07/produtos', [HomeController::class, 'aula07produtos']);
Route::get('/aula07/categorias', [HomeController::class, 'aula07categorias']);

//Rotas da aula 06
Route::get('/aula06', [HomeController::class, 'aula06index']);

//Rotas da aula 05
Route::get('/aula05', [HomeController::class, 'aula05index']);
Route::post('/aula05/bemvindo', [HomeController::class, 'aula05bemvindo']);
Route::get('/aula05/bemvindo', [HomeController::class, 'aula05bemvindo']);

// Rotas da aula 04
Route::get('/aula04', [HomeController::class, 'aula04home']);
Route::get('/aula04/sobre-nos', [HomeController::class, 'aula04sobrenos']);
Route::get('/aula04/contato', [HomeController::class, 'aula04contato']);
Route::get('/aula04/usuario/{codigo}/', [HomeController::class, 'usuario']);

