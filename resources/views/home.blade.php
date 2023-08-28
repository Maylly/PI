<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <title>Coleta e Reciclagem - Home</title>
</head>
<body>
    <header id="header">
        <div class="barra"></div>
        <div class="container">
            <div class="flex">
                <a href="/"><img src="{{ asset('assets/img/logo.svg') }}" alt="" class="logo"></a>

                <nav>
                    <ul>
                        <li><a href="/projetos/acat">Coleta</a></li>
                        <li><a href="/projetos/eco">ECO - Espaço Maker</a></li>
                        <li><a href="/eventos">Eventos</a></li>
                        <li><a href="/contato">Contato</a></li>
                        <li><a href="/doar">Doação</a></li>
                        <li><a href="/jogos">Jogos</a></li>

                        @auth
                            <li><a href="/dashboard">Adm</a></li>
                        @endauth
                    </ul>
                </nav>

                <form class="search-box" method="get" action="/pesquisa">
                    <input type="search" class="search-txt" placeholder="Pesquisar" name="search-param">
                    <button type="submit" class="search-btn">
                        <img src="{{ asset('assets/img/icons/loupe.svg') }}" alt="Lupa" height="20" width="20">
                    </button>
                </form>
            </div>
        </div>
    </header>

    <script src="{{ asset('assets/js/home.js') }}"></script>
</body>
</html>
