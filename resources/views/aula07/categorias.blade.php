<x-layout title="Categorias">

    <div class="container mt-3">
        <div>
            <a href="/aula07/produtos" class="btn btn-primary btn-sm">Produtos</a>
            <a href="/aula07/categorias" class="btn btn-primary btn-sm">Categorias</a>
        </div>
        @foreach ($categorias as $categoria)
        <div class="mt-3">
            <p><b>Id</b> {{ $categoria->id }} </p>
            <p><b>Nome</b> {{ $categoria->nome }} </p>
                @foreach ($categoria->produtos as $produto)
                    <div>{{ $produto->nome}}</div>    
                @endforeach
            </p>
            <hr>
        </div>           
        @endforeach
    </div>

</x-layout>
