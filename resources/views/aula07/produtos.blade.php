<x-layout title="Bem-vindo">

    <div class="container mt-3">
    <div>
        <a href="/aula07/produtos" class="btn btn-primary btn-sm">Produtos</a>
        <a href="/aula07/categorias" class="btn btn-primary btn-sm">Categorias</a>
    </div>
        <table class="mt-3">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
            </tr>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->descricao }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    
</x-layout>
