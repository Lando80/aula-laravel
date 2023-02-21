<?php

namespace App\Http\Controllers;

use App\Models\Aula;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Models\Venda;
use Illuminate\Support\ViewErrorBag;

class HomeController extends Controller
{

public function index()
{
    $aulas = Aula::all();
    return view('home', [
        'aulas' => $aulas
    ]);
}




// public function sobrenos(){
//     return view('sobre-nos', [
//         'erro' => true
//     ]);
// }

// public function contato(){
//     return view('contato');
// }

//Codigos da aula 07
public function aula07produtos()
{
    $produtos = Produto::all();
    return view('aula07.produtos', [
        'produtos' => $produtos
    ]);
}
public function aula07categorias()
{
    $categorias = Categoria::all();
    return view('aula07.categorias', [
        'categorias' => $categorias
    ]);
}


//Codigos da aula 06
public function aula06index()
{
    $produtos = Produto::all();
    return view('aula06.produtos', [
        'produtos' => $produtos
    ]);
}

//Codigos da aula 05
    public function aula05index(){
        return view('aula05.index', [
            'erro' => false
        ]);
    }

    public function aula05bemvindo(Request $request){
        return view('aula05.bem-vindo', [
            'erro' => false,
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

//Codigos da aula 03
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
