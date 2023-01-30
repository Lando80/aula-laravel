<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(){
//     echo "olá enfermeira";
// });


Route::get('/', function(){
    return view ( view: 'site.home');
})->name('site.home');

Route::get('/cursos', function(){
    return view ( view: 'welcome');
})->name('site.courses');

Route::get('/contact', function(){
    return view ( view: 'welcome');
})->name('site.contact');

