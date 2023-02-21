<x-layout title="Categorias - Aula 06">

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
            </tr>
        @endforeach
    </table>

</x-layout>
