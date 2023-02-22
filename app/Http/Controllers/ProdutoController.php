<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::paginate(5);

        // dd($produtos);
        return view('produto.index', [
            'produtos' => $produtos
        ]);
    }

    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.form', [
            'categorias' => $categorias
        ]);
    }

    public function store(Request $request)
    {
        Produto::create($request->all());
        
        return redirect('/produtos')->with('sucesso', 'Registro enviado com sucesso');
    }
}
