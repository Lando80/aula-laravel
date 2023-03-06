<x-layout title="Criar Produtos">
    <div class="container mt-5 mb-5">
        <h1>Formulário de produtos</h1>
        
        <div class="mt-5 mb-5">

            @include('components.alert')
            
            @if(isset($produto))    
                <form action="/produtos/{{ $produto->id }}" method="POST">
                @method("PUT")
            @else
                <form action="/produtos" method="POST">
            @endif

                @csrf
                <div class="mb-3">
                    <label for="nome">Nome:</label> <span class="text-danger">*</span>
                    <input type="text" name="nome" required="required" class="form-control" value="{{ $produto->nome ?? ''}}">
                </div>
                
                <div class="mb-3">
                    <label for="preco">Preço:</label><span class="text-danger">*</span>
                    <input type="number" step="any" name="preco" required="required" class="form-control" value="{{ $produto->preco ?? '' }}">
                </div>

                <div class="mb-3">
                    <label for="descricao">Descrição:</label>
                    <textarea name="descricao" id="" cols="30" rows="6" class="form-control">{{ $produto->descricao ?? '' }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="status">Status:</label><span class="text-danger">*</span>
                    <div>
                        <input type="radio" name="status" value="A"  @checked(!isset($produto) || $produto->status == "A") >Ativo
                        <input type="radio" name="status" value="I" class="ms-4" @checked(isset($produto) && $produto->status == "I")>Inativo
                    </div>
                </div>

                <div class="mb-3">
                    <label for="categoria_id">Categoria:</label><span class="text-danger">*</span>
                    <select name="categoria_id" class="form-select">
                        @foreach ($categorias as $categoria)
                            <option value="{{$categoria->id}}" @selected(isset($produto) && $produto->categoria_id == $categoria->id)>
                                {{$categoria->nome}}
                            </option>
                        @endforeach
                    </select>
                </div>

                <input type="submit" value="Salvar" class="btn btn-primary">
                
            </form>

        </div>

        <div class="mb-3">
            <span class="text-danger">*</span><i>Todos os campos são obrigatórios</i>
        </div>
            <a href="/produtos" class="btn btn-light">Voltar</a>
        </div>
    
</x-layout>
