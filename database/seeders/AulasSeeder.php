<?php

namespace Database\Seeders;

use App\Models\Aula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AulasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aula::create([
            'objeto' => 'PHP',
            'tema' => 'Conceitos Básicos',
            'subtemas' => 'Variáveis, tipos de variáveis, estrutura de decisão, estruturas de repetição'
        ]);

        Aula::create([
            'objeto' => 'PHP',
            'tema' => 'Extruturas Complexas',
            'subtemas' => 'Aprofundamento em arrays, funções, funções nativas'
        ]);

        Aula::create([
            'objeto' => 'PHP',
            'tema' => 'Orientação a Objetos',
            'subtemas' => 'Classes, objetos, intâncias, Autoload do Composer, métodos, tipos de métodos e atributos, MVC'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Conceitos Básicos',
            'subtemas' => 'Instalação, configurações iniciais, rotas, controllers'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Interfaces',
            'subtemas' => 'Template Engine: Blade'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Banco de Dados',
            'subtemas' => 'Migrations, ORM Eloquent: Leitura, Inserção, Atualização e Exclusão'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Banco de Dados',
            'subtemas' => 'Eloquent: relacionamentos'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'CRUD',
            'subtemas' => 'Leitura e Criação de Registros'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'CRUD',
            'subtemas' => 'Atualização e Exclusão de Registros'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Projeto Prático',
            'subtemas' => 'Desenvolvimento de Projeto Prático Parte 1 - Templeate, Controle de Acesso'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Projeto Prático',
            'subtemas' => 'Desenvolvimento de Projeto Prático Parte 2- Primeiras Telas'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Projeto Prático',
            'subtemas' => 'Desenvolvimento de Projeto Prático Parte - CRUD'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Projeto Prático',
            'subtemas' => 'Desenvolvimento de Projeto Prático Parte - CRUD'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'Melhores Práticas',
            'subtemas' => 'Aprimorando o Projeto Prático - Service Container'
        ]);

        Aula::create([
            'objeto' => 'Laravel',
            'tema' => 'ORM',
            'subtemas' => 'Métodos do Eloquent e Collections'
        ]);
    }
}
