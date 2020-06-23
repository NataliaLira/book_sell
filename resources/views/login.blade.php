<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
    <script src="https://use.fontawesome.com/271587175f.js"></script>

</head>

<body>
    <header>
        <img src="img/book_logo.svg" alt="">
        <nav>
            <ul>
                <li><a href="favoritos.html">Favoritos</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="cadastro.html">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="loginBox" class="flexBox">
            <h2 id="loginHeader">LOGIN</h2>
            <form action="" method="get" target="" id="loginForm" class="flexBox">
                <label for="username">Username:</label>
                <br>
                <input type="text" id="username" class="textBox">
                <br>
                <label for="password">Senha:</label>
                <br>
                <input type="text" id="password" class="textBox">
                <br>
                <input type="submit" value="LOG IN" class="button">
            </form>
            <a href="">Forgotten Password?</a>
        </div>
    </main>
    <footer>
        <p>copyright© - 2020 FavLivros. All rights reserved</p>
    </footer>
</body>

</html>