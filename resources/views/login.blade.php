@extends('templates.institucional')
@section('titulo','Login')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <main>
        <h2>LOGIN</h2>
        <form action="" method="get" target="" id="loginForm" class="flexBox">
            <label for="username">
                Username
                <input type="text" id="username" name="username">
            </label>
            <label for="password">
                Senha
                <input type="password" id="password" name="password">
            </label>
            <button type="submit">Login</button>
        </form>
            
    </main>
@endsection
