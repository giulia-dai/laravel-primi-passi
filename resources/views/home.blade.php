<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        body {
            font-family: 'Nunito', sans-serif;
        }

        h1,
        h2 {
            color: red;
            text-align: center
        }

        .list ul {
            list-style: none;
        }
    </style>
</head>

<body>
    <main>
        <h1>{{ $hello }}</h1>
        <h2>{{ $text }}</h2>

        <div class="container">
            <p>Visit our sections!</p>
            <div class="list">
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about-us') }}">About-us</a></li>
                    <li><a href="{{ route('shop') }}">Shop</a></li>
                </ul>
            </div>
        </div>
    </main>

</body>

</html>
