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
        $categoriaAlimento = Categoria::where('nome', 'Alimentos')->get()->first();
        $categoriaCozinha = Categoria::where('nome', 'Cozinha')->get()->first();
        $categoriaEletrodomestico = Categoria::where('nome', 'Eletrodomesticos')->get()->first();

        //dd($categoriaAlimento);

        Produto::create([
            'nome' => 'Notebook',
            'preco' => 2500.00,
            'descricao' => 'Samsung',
            'status' => 'A',
            'categoria_id' =>$categoriaEletrodomestico->id
        ]);
        Produto::create([
            'nome' => 'Celular',
            'preco' => 900.00,
            'descricao' => 'J2',
            'status' => 'A',
            'categoria_id' =>$categoriaEletrodomestico->id
        ]);
        Produto::create([
            'nome' => 'Açúcar',
            'preco' => 5.70,
            'descricao' => 'Doce doce como mél',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Água',
            'preco' => 3.30,
            'descricao' => 'Mineral',
            'status' => 'I',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Laranja',
            'preco' => 4.75,
            'descricao' => 'de Rio preto da eva',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Panela de Pressão',
            'preco' => 458.20,
            'descricao' => 'Panela',
            'status' => 'A',
            'categoria_id' =>$categoriaCozinha->id
        ]);
        Produto::create([
            'nome' => 'Armário',
            'preco' => 625.30,
            'descricao' => 'Armário aéreo',
            'status' => 'I',
            'categoria_id' =>$categoriaCozinha->id
        ]);
        Produto::create([
            'nome' => 'Frigideira',
            'preco' => 95.00,
            'descricao' => 'Uma frigideira antiaderente',
            'status' => 'A',
            'categoria_id' =>$categoriaCozinha->id
        ]);
        Produto::create([
            'nome' => 'Ralador',
            'preco' => 17.85,
            'descricao' => 'ralador de 4 faces',
            'status' => 'I',
            'categoria_id' =>$categoriaCozinha->id
        ]);
        Produto::create([
            'nome' => 'Tomate',
            'preco' => 7.96,
            'descricao' => '1kg',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Leite',
            'preco' => 5.20,
            'descricao' => 'Desnaturado',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Bananas',
            'preco' => 5.50,
            'descricao' => 'Uma palma de banana prata',
            'status' => 'I',
            'categoria_id' =>$categoriaCozinha->id
        ]);
        Produto::create([
            'nome' => 'Macarrão',
            'preco' => 6.80,
            'descricao' => 'para sopa',
            'status' => 'A',
            'categoria_id' =>$categoriaAlimento->id
        ]);
        Produto::create([
            'nome' => 'Cafeteira',
            'preco' => 125.65,
            'descricao' => 'Arno',
            'status' => 'A',
            'categoria_id' =>$categoriaEletrodomestico->id
        ]);
        Produto::create([
            'nome' => 'Ventilador',
            'preco' => 269.32,
            'descricao' => 'Mondial',
            'status' => 'A',
            'categoria_id' =>$categoriaEletrodomestico->id
        ]);
        
    }
}
