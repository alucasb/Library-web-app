@extends('components.main')

@section('title', 'home')

@section('content')
<header>
    <h1 class="display-2" id="title">Bem vindo</h1>
</header>
<main>
    <div class="content">
        <p>
            Aqui você pode catalogar o que você esta lendo, e o que pretende ler da sua própria maneira, possuindo acesso a uma coleção infindável de obras a sua escolha em sua própria pratileira, adicionando localmente qualquer obra que você tenha ou que pretende ter.
        </p>
        <p>
            Nosso intuito aqui é incentivar a leitura e construir uma maneira facil de interagir com as obras que você consome ou que pretende aproveitar.
        </p>
        <p>
            Portanto sinta-se a vontade para adicionar suas obras favoritas.
        </p>
        <a href="/items/add" class="btn btn-primary">Adicione uma obra!</a>
    </div>
</main>

<footer class="bg-secondary text-center text-lg-start bg-opacity-10" id="home-footer">
    <div class="text-center p-3">
        &copy; 2023 feito por 
        <a href="https://github.com/alucasb" target="_blank" class="text-dark">André Lucas</a>
    </div>
</footer>
@endsection


