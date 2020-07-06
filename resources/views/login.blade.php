@extends('templates.institucional')
@section('titulo','Login')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <main>
        <h2>LOGIN</h2>
        <form action="/login" method="post" id="loginForm">
            @csrf
            <label for="email">
                Email
                <input type="email" id="email" name="email">
            </label>
            <label for="password">
                Senha
                <input type="password" id="password" name="password">
            </label>
            <button type="submit">Login</button>
        </form>
            
    </main>
@endsection
