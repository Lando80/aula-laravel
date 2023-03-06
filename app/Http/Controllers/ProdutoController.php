<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use App\Models\Categoria;
use App\Models\Produto;
use Exception;
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

    public function store(ProdutoRequest $request)
    {
         Produto::create($request->all());
        
        return redirect('/produtos')->with('sucesso', 'Registro enviado com sucesso');
    }

    public function edit(Produto $produto)
    {
        $categorias = Categoria::all();

        return view('produto.form', [
            'categorias' => $categorias,
            'produto' => $produto
        ]);
    }

    public function update(Produto $produto, ProdutoRequest $request)
    {
        $produto->update($request->all());
        return redirect('/produtos')->with('sucesso', "Registro alterado com sucesso");
    }

    public function destroy(Produto $produto)
    {
        try{
            $produto->delete();
            return redirect('/produtos')->with('sucesso', "Registro excluído com sucesso");
        }catch(Exception $e) {
            return redirect('/produtos')->withErrors(["Não foi possível excluir o registro"]);
        }
    }
}
