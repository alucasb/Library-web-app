<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="collapse navbar-collapse" id="navbar">
                <li class="nav-item"><a class="nav-link" href="/"><img src="/img/booklogo.jpg" alt="logo"></a></li>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/items/add">Adicionar obra</a></li>
                    <li class="nav-item"><a class="nav-link" href="/bib">Minha Biblioteca</a></li>
                </ul>
            </div>
        </nav>

    </header>
    <main>
        <div class="container-fluid">
                @if (session('msg'))
                    <p class="msg"> {{session('msg')}}</p>
                @endif
                @yield('content')
        </div>
    </main>
</body>
</html>