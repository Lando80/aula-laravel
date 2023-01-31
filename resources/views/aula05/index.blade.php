<x-layout title="Página inicial">
    <h1>Bem-vindo ao meu site</h1>

    @if ($erro == true)
        <x-alert/>
    @endif

    <form action="/aula05/bemvindo" method="POST">
         @csrf
        <!--GET-->
        <!--POST-->
        <input type="text" placeholder="Digite seu nome" name="nome">
        <input type="text" placeholder="Digite sua idade" name="idade">
        <input type="submit" value="Clique para as boas vindas">
    </form>

</x-layout>