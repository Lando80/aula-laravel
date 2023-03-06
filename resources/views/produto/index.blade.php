<x-layout title="Produtos">
    <div class="container mt-5 mb-5">
        <h1>Listagem de produtos</h1>

        @include('components.alert')  
            
            
        <div class="mt-3 mb-3">
            <a href="/produtos/create" class="btn btn-primary">Criar Produto</a>
        </div>
        
        <div>
            <table class="table table-hover">
                <tr style="background-color: #d9d9d9">
                    <th>Ações</th>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="text-end">Preço</th>
                    <th>Status</th>
                    <th>Categoria</th>
                </tr>
                @foreach ($produtos as $produto)
                    @if ($produto->status == 'A')
                        <tr class="verde">
                    @elseif (($produto->status == 'I'))
                        <tr class="vermelho">
                    @else
                        <tr>
                    @endif    
                        <td>
                            <a href="/produtos/{{ $produto->id }}" class="btn btn-warning btn-sm" >Editar</a>
                            <form action="/produtos/{{ $produto->id }}" class="d-inline-block" method="POST" onsubmit="confirmaExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Exluir</button>
                            </form>
                        </td>
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

<script>
    function confirmaExclusao(event){
        event.preventDefault();

        if (confirm("Tem certeza que deseja excluir?")) {
            event.target.submit();
        }
    }
</script>