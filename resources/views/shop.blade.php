<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Shop</title>
    <style>
        .wrap {
            max-width: 400px;
        }

        .wrap img {
            width: 100%;
        }

        .container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <h3>{{ $shop_message }}</h3>
    <div class="list">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about-us') }}">About-us</a></li>
            <li><a href="{{ route('shop') }}">Shop</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="wrap">
            <img src="https://images.unsplash.com/photo-1615751072497-5f5169febe17?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y3V0ZSUyMGRvZ3xlbnwwfHwwfHw%3D&w=1000&q=80"
                alt="cute-dog">
        </div>
    </div>

</body>

</html>
