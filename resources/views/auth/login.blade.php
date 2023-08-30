<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coleta e Reciclagem - Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}">
</head>

<body>

    <x-authentication-card>
        <x-slot name="logo">
            <img src="{{ asset('/assets/img/logo.svg') }}" alt="...">
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
                <x-input id="email" type="email" class="input_text" name="email" :value="old('email')" required autofocus
                    autocomplete="username" placeholder="Email" />
            </div>

            <div class="input_group">
                <i class="fa fa-unlock-alt"></i>
                <x-input id="password" class="input_text" type="password" name="password" required
                    autocomplete="current-password" placeholder="Senha" />
            </div>

            <div class="button_group" id="login_button">
                <x-button>
                    {{ __('Entrar') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>
