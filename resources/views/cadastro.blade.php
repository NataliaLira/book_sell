@extends('templates.institucional')
@section('titulo','Cadastre-se')
@section('conteudo')
    <link rel="stylesheet" href="/css/login.css">
    <main>
        <h2>CADASTRAR</h2>
        <form action="/usuario" method="post">
            @csrf
            <label for="name">
                Nome
                <input type="text" id="name" name="name">
            </label>
            <label for="email">
                Email
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