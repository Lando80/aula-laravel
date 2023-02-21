<x-layout title="Produtos - Aula 06">

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Descrição</th>
            <th>Categoria</th>
        </tr>
        @foreach ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>{{ $produto->preco }}</td>
                <td>{{ $produto->descricao }}</td>
                <td>{{ $produto->categoria->nome }}</td>
            </tr>
        @endforeach
    </table>

</x-layout>
