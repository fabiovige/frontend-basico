<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Frontend - Básico</h1>

    <h2>Aula 1 - Exibindo Dados</h2>
    {{ $user['name'] }}
    {!! $user['bio'] !!}

    <hr>

    <h2>Aula 2 - Diretivas - IF Statements</h2>

    @if ($user['admin'] == true)
        eu sou admin <br>
    @elseif ($user['id'] == 1)
        primeiro usuario do sistema<br>
    @else
        olá usuário<br>
    @endif

    @unless ($user['admin'])
        vc não é admin<br>
    @endunless

    @isset($user['name'])
        existe a propriedade name<br>
    @endisset

    @empty($user['sobrenome'])
        sobrenome esta vazia<br>
    @endempty

    @auth()
        usuario logado <br>
    @endauth

    @guest()
        ola convidado
    @endguest

    @production
        ambiente de produção
    @endproduction

    @env()
    ambiente local
    @endenv

    <script>
        const user = {{ Js::from($user) }}
        console.log(user)
    </script>
</body>

</html>
