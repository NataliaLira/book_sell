<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.header')

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
   @include('includes.footer')

</body>

</html>