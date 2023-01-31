<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;
use Illuminate\Support\ViewErrorBag;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'erro' => false
        ]);
    }

    public function sobrenos(){
        return view('sobre-nos', [
            'erro' => true
        ]);
    }

    public function contato(){
        return view('contato');
    }

    public function bemvindo(Request $request){
        return view('bem-vindo', [
            'nome' => $request->nome,
            'idade' => $request->idade
        ]);
    }




// Codigos da aula 04
    public function aula04home(){
        return view('aula04.home');
    }

    public function aula04sobrenos(){
        return view('aula04.sobre-nos');
    }

    public function aula04contato(){
        return view('aula04.contato');
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

        return view('aula04.usuario', [
            'codigoUsuario' => $codigoUsuario,
            'usuarioLogado' => 2,
            'vendas' => $vendas
        ]);
    }
}
