<x-layout title="Produtos">
    <div class="container mt-5 mb-5">
        <h1>Listagem de produtos</h1>

        @if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif
        
        <div class="mt-5">
            <a href="/produtos/create" class="btn btn-primary">Criar Produto</a>
        </div>
        
        <div>
            <table class="table table-hover">
                <tr>
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="text-end">Preço</th>
                    <th>Status</th>
                    <th>Categoria</th>
                </tr>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>
                            <a href="" class="btn btn-warning btn-sm">Editar</a>
                            <a href="" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td class="text-end">R$ {{ number_format($produto->preco, 2, ",",".")}}</td>
                        <td>
                            @if ($produto->status == 'A')
                                <span class="badge text-bg-success">Ativo</span>
                            @else
                                <span class="badge text-bg-danger">Inativo</span>
                            @endif
                        </td>
                        <td>{{ $produto->categoria->nome }}</td>                   
                    </tr>
                @endforeach
            </table>
            {{$produtos->links()}}
    
        </div>
    </div>
    
    
</x-layout>
