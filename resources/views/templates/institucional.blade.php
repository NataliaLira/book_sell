<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("/css/main.css") }}">
    <link rel="stylesheet"  href="/css/form.css">
    <link rel="stylesheet" href="/css/fav.css">
    <script src="https://use.fontawesome.com/271587175f.js"></script>
</head>

<body>
    <header>
        <img src="img/book_logo.svg" alt="">
        <nav>
            <ul>
                <li><a href="/favorito">Favoritos</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/cadastro">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    @yield('conteudo')
    <footer>
        <p>copyright© - 2020 FavLivros. All rights reserved</p>
    </footer>

</body>

</html>