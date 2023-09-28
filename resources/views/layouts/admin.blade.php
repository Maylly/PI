<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Coleta e Reciclagem - @yield('title')</title>
    @vite(['resources/css/main.css', 'resources/css/admin.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="/"><img class="logo-img" alt="..."></a>
                <p class="user-name" >{{ Auth::user()->name }}</p>
            </div>
            <ul class="links">
                <li><a href="/dashboard/create/event">Criar evento</a></li>
                <li><a href="#">Coisa 2</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <button type="submit">Sair</button>
                    </form>
                </li>
            </ul>

            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div class="dropdown_menu">
                <ul>
                    <li><a href="/dashboard/create/event">Criar evento</a></li>
                    <li><a href="#">Coisa 2</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <button type="submit">Sair</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>