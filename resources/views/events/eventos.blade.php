<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/events/eventos.css') }}">
    <title>Coleta e Reciclagem - Eventos</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="/"><img class="logo-img" src="{{ asset('assets/img/logo.svg') }}"
                        alt="..."></a></div>
            <ul class="links">
                <li><a href="/projetos/acat">Coleta</a></li>
                <li><a href="/projetos/eco">ECO - Espaço Maker</a></li>
                <li><a href="/eventos">Eventos</a></li>
                <li><a href="/doacao">Doação</a></li>
                <li><a href="/jogos">Jogos</a></li>
                @auth
                    <li><a href="/dashboard">Dashboard</a></li>
                @endauth
            </ul>

            <form action="/search" method="get">
                <div class="search-box">
                    <input type="search" class="search-txt" placeholder="Pesquisar" name="search-param">
                    <button type="submit" class="search-btn">
                        <img src="{{ asset('assets/img/icons/loupe.svg') }}" alt="Lupa" width="20">
                    </button>
                </div>
            </form>

            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="dropdown_menu">
                <ul>
                    <li><a href="/projetos/acat">Coleta</a></li>
                    <li><a href="/projetos/eco">ECO - Espaço Maker</a></li>
                    <li><a href="/eventos">Eventos</a></li>
                    <li><a href="/doacao">Doação</a></li>
                    <li><a href="/jogos">Jogos</a></li>
                    @auth
                        <li><a href="/dashboard">Dashboard</a></li>
                    @endauth
                    <li>
                        <form action="/search" method="get">
                            <div class="search-box-dropdown">
                                <input type="search" class="search-txt" placeholder="Pesquisar" name="search-param">
                                <button type="submit" class="search-btn">
                                    <img src="{{ asset('assets/img/icons/loupe.svg') }}" alt="Lupa" width="20">
                                </button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <section>
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Próximos Eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
        @endif
        <div id="cards-container" class="row">
            @foreach ($events as $event)
                <div class="card col-md-3">
                    <img src="{{ asset("assets/img/events/$event->image") }}" alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                    </div>
                </div>
            @endforeach
            @if (count($events) == 0 && $search)
                <p>Não foi possível encontrar nenhum evento com {{ $search }}! <a href="/">Ver todos</a>
                </p>
            @elseif(count($events) == 0)
                <p>Não há eventos disponíveis</p>
            @endif
        </div>
    </section>

    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
