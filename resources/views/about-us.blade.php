<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
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
    <main>
        <h3>{{ $message }}</h3>
        <div class="list">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About-us</a></li>
                <li><a href="{{ route('shop') }}">Shop</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="wrap">
                <img src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/609ff699-cfec-4182-b2e7-1792c612605f/d7h23wf-699a6f3e-fd7b-4614-ade9-02ac8ccf75eb.jpg/v1/fill/w_636,h_380,q_75,strp/funny_face_dog_by_foxtali_d7h23wf-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MzgwIiwicGF0aCI6IlwvZlwvNjA5ZmY2OTktY2ZlYy00MTgyLWIyZTctMTc5MmM2MTI2MDVmXC9kN2gyM3dmLTY5OWE2ZjNlLWZkN2ItNDYxNC1hZGU5LTAyYWM4Y2NmNzVlYi5qcGciLCJ3aWR0aCI6Ijw9NjM2In1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.mk-Xn6F3UvaCN6cI5HcSXbmF6bT6B4wppeUPqnjM9yA"
                    alt="cute-dog">
            </div>
        </div>
    </main>
</body>

</html>
