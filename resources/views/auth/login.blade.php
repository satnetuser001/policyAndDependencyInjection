<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
</head>
<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label>Email</label>

            <div>
                <input type="email" name="email" value="root@gmail.com">

                @error('email')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <label>Пароль</label>

            <div>
                <input name="password" value="1077">

                @error('password')
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div>
            <button type="submit">
                Войти
            </button>
        </div>
    </form>

</body>
</html>