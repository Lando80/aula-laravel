<x-layout title="Pagina inicial">


<h1>Treinamento Laravel</h1>

<table class="table table-hover">
    <tr>
        <th>Aula</th>
        <th>Objeto</th>
        <th>Tema</th>
        <th>Subtemas</th>
    </tr>
    @foreach($aulas as $aula)
        <tr>
            <td>{{$aula->id}}</td>
            <td>{{$aula->objeto}}</td>
            <td>{{$aula->tema}}</td>
            <td>{{$aula->subtemas}}</td>
        </tr>
    @endforeach
</table>


</x-layout>