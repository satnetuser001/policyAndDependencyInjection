<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Политика и внедрение зависимостей</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
</head>
<body>
    @guest
        <a href="{{ route('login') }}">Log in</a>
    @endguest

    <h3>Политика не работает без внедрения зависимостей в контроллере</h3>

    <p><a href="{{ route('with', 1) }}">С внедрением зависимости</a></p>

    <p><a href="{{ route('without', 1) }}">Без внедрения зависимости</a></p>
</body>
</html>