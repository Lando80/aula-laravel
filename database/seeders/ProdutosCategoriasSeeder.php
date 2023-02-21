<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use App\Models\ProdutoCategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosCategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ID da Faca
        //Colocar em duas categorias -> cozinha e eletodomestico
        $faca = Produto::where('nome', 'Faca')->get()->first();
        $cozinha = Categoria::where('nome', 'Cozinha')->get()->first();
        $eletromestico = Categoria::where('nome', 'Eletrodomesticos')->get()->first();

        ProdutoCategoria::create([
            'produto_id' => $faca->id,
            'categoria_id' => $eletromestico->id
        ]);

    }
}
