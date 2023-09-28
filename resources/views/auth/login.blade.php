<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Coleta e Reciclagem - Login</title>
    @vite(['resources/css/auth/login.css', 'resources/js/app.js'])
</head>

<body>
    <x-authentication-card>
        <x-slot name="logo">
            <img class="logo-img" alt="...">
        </x-slot>

        <x-validation-errors class="errorContainer" />

        @if (session('status'))
            <div>
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="input_group">
                <i class="fa fa-user"></i>
                <x-input id="email" type="email" class="input_text" name="email" placeholder="Email" required />
            </div>

            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <x-input id="password" type="password" class="input_text" name="password" placeholder="Senha"
                    required />
            </div>

            <div class="button_group" id="login_button">
                <x-button>
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
