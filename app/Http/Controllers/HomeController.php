<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function sobrenos(){
        return view('sobre-nos');
    }

    public function contato(){
        return view('contato');
    }

    public function usuario($codigoUsuario){

        $vendas = [];
        
        $venda  = new Venda();
        $venda->codigo = 1;
        $venda->valor = 5.60;
        $venda->descricao = "Arroz";
        $venda->comprador = "João";
        $venda->data = "17/11/2022";

        $vendas[] = $venda;

        $venda  = new Venda();
        $venda->codigo = 2;
        $venda->valor = 10;
        $venda->descricao = "Farinha";
        $venda->comprador = "Maria";
        $venda->data = "18/11/2022";

        $vendas[] = $venda;

        $venda  = new Venda();
        $venda->codigo = 3;
        $venda->valor = 7.5;
        $venda->descricao = "Feijão";
        $venda->comprador = "José";
        $venda->data = "18/11/2022";

        $vendas[] = $venda;

        $venda  = new Venda();
        $venda->codigo = 4;
        $venda->valor = 6;
        $venda->descricao = "Sardinha";
        $venda->comprador = "José";
        $venda->data = "18/11/2022";

        $vendas[] = $venda;

        $venda  = new Venda();
        $venda->codigo = 5;
        $venda->valor = 10;
        $venda->descricao = "Qualquer coisa";
        $venda->comprador = "Maria";
        $venda->data = "20/11/2022";

        $vendas[] = $venda;

        return view('usuario', [
            'codigoUsuario' => $codigoUsuario,
            'usuarioLogado' => 2,
            'vendas' => $vendas
        ]);
    }
}
