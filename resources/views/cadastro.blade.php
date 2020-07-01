<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    @include('includes.header')
    <main>
        <div id="registerBox" class="flexBox">
            <h2 id="loginHeader">CADASTRAR</h2>
            <form action="" method="get" target="" id="loginForm" class="flexBox">
                <label for="username">Username:</label>
                <br>
                <input type="text" id="username" class="textBox">
                <br>
                <label for="username">E-mail:</label>
                <br>
                <input type="email" name="" id=""  class="textBox">
                <br>
                <label for="password">Senha:</label>
                <br>
                <input type="password" id="password" class="textBox">
                <br>
                <input type="submit" value="CADASTRAR" class="button">
            </form>
        </div>
    </main>
    @include('includes.footer')

</body>

</html>
