<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Pokemons</title>
    <link rel="icon" type="image/png" href="../img/logo/pokeball-48.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="text-center">
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div class="inner text-dark">
                <div class="bg-dark" style="border:2px solid blue; border-radius:5px ; padding:30px">
                    <a href="{{ route('home') }}">
                        <img src='../img/logo/pokedex-logo.png' class="omage-top-center" alt='pokedex' href="#"
                            style=" image-rendering: auto;image-rendering: crisp-edges;image-rendering: pixelated;img-fluid;flex-auto;d-none;d-md-block" />
                    </a>
                </div>
            </div>
            <div class=" container px-4 px-lg-5 mt-1 ">@yield('navigation')
            </div>
        </header>

        <main role="main" class="inner cover" style="width:100%">
            @yield('content')
        </main>

        <footer class="py-5 bg-dark mt-auto">
            <div class="inner">
                <p class="text-center">
                <h5 class="text-white" style=" text-shadow : 1px 1px 2px white, 0 0 10px blue, 0 0 5px indigo">
                    Copyright © <a href="/home">Pokemons</a>
                    {{ date('Y') }}</h5>
                </p>
            </div>
        </footer>

    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
