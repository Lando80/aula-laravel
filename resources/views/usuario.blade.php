<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/sobre-nos">Sobre Nós</a></li>
        <li><a href="/contato">Contato</a></li>
        <li><a href="/usuario/1">Usuario</a></li>

    </ul>

    <h1>Usuário codigo: {{$codigo}} </h1>
    
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, accusamus.</p>

    <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, doloribus labore. Cumque molestias praesentium officiis tenetur vel odit eligendi voluptas corporis eum, illum officia repellat impedit veniam harum explicabo dolores!
    </p>
    @if ($usuarioLogado == 1)
        <p>Usuario está logado</p>
    @elseif ($usuarioLogado == 2)
        <p>Usuário administrador está logado</p>
    @else
        <p>Usuário não está logado</p>
    @endif

    <table>
        <tr>
            <th>Código</th>
            <th>Descrição</th>
            <th>Data</th>
            <th>Comprador</th>
            <th>Valor</th>
        </tr>
        <tr>
            <td>{{ $venda->codigo }}</td>
            <td>{{ $venda->descricao }}</td>
            <td>{{ $venda->data }}</td>
            <td>{{ $venda->comprador }}</td>
            <td>{{ $venda->valor }}</td>
        </tr>
    </table>

</body>
</html>