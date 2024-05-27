<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{ $user['name'] }}
    {!! $user['bio'] !!}

    <script>
        const user = {{ Js::from($user) }}
        console.log(user)
    </script>
</body>

</html>
