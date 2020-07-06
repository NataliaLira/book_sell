@extends('templates.institucional')
@section('titulo','Cadastre-se')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <main>
        <h2>CADASTRAR</h2>
        <form action="" method="get" target="" id="loginForm" class="flexBox">
            <label for="username">
                Username
                <input type="text" id="username" name="username">
            </label>
            <label for="email">
                Username
                <input type="email" id="email" name="email">
            </label>
            <label for="password">
                Senha
                <input type="password" id="password" name="password">
            </label>
            <label for="password">
                Confirmação de Senha
                <input type="password" id="conf" name="conf">
            </label>
            <button type="submit">Cadastrar</button>
        </form>
            
    </main>
@endsection