{{-- <div class="alert alert-danger" role="alert">
    Erro ao salvar o registro!
</div> --}}

@if (session('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif

        @if (isset($errors))
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endforeach
        @endif  