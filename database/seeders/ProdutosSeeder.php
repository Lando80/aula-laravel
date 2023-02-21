<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoriaAlimento = Categoria::where('nome', 'Cozinha')->get()->first();

        //dd($categoriaAlimento);

        Produto::create([
            'nome' => 'Faca',
            'preco' => 30,
            'descricao' => 'Faca afiada',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
    }
}
