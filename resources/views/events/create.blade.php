<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/events/create.css') }}">
    <title>Coleta e Reciclagem - Criar evento</title>
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <a href="/"><img class="logo-img" src="{{ asset('assets/img/logo.svg') }}" alt="..."></a>
                <p>{{ Auth::user()->name }}</p>
            </div>
            <ul class="links">
                <li><a href="/dashboard">Voltar</a></li>
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

    <section>
        <form action="/dashboard/create" method="POST" enctype="multipart/form-data" class="create-event">
            @csrf

            <div class="form-group">
                <label for="title">Nome do evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <input name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></input>
            </div>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>


            <center>
                <input type="submit" value="Criar Evento">
            </center>
        </form>
    </section>

    <script src="{{ asset('assets/js/header.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
