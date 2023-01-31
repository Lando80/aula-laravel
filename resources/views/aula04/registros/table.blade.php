<table>
    <tr>
        <th>#</th>
        <th>Código</th>
        <th>Descrição</th>
        <th>Data</th>
        <th>Comprador</th>
        <th>Valor</th>
    </tr>
    @foreach ($vendas as $venda)
        <tr>
            <td>{{ $loop->last }}</td>
            <td>{{ $venda->codigo }}</td>
            <td>{{ $venda->descricao }}</td>
            <td>{{ $venda->data }}</td>
            <td>{{ $venda->comprador }}</td>
            <td>{{ $venda->valor }}</td>
        </tr>
    @endforeach
</table>