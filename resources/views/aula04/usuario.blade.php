<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Usuário</title>
</head>
<body>

    <ul>
        <li><a href="/aula04/">Home</a></li>
        <li><a href="/aula04/sobre-nos/">Sobre Nós</a></li>
        <li><a href="/aula04/contato/">Contato</a></li>
        <li><a href="/aula04/usuario/1">Usuario</a></li>
    </ul>

    <h1>Usuário codigo: {{$codigoUsuario}} </h1>
    
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

    <x-formulario>
        <x-slot:outroslot>
            Outro texto de ajuda
        </x-slot:outroslot>
        
        <p>Digite seu nome para acessar o sistema</p>
        <img src="https://img.freepik.com/vetores-premium/enfermeira-fofa-segurando-a-injecao-em-boa-pose_123847-1472.jpg?w=2000" alt="" style="width: 150px">
    </x-formulario>
    <br><br>
    <a href="/">Início</a>    
</body>
</html>