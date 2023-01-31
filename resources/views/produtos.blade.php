<x-layout title="Bem-vindo">

    <table>
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

</x-layout>
