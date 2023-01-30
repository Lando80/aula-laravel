<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function sobreNos(){
        return view('sobre-nos');
    }

    public function contato(){
        return view('contato');
    }

    public function usuario($codigoUsuario){
        return view('usuario', [
            'codigo' => $codigoUsuario
        ]);
    }
}
