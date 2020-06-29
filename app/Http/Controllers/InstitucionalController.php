<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionalController extends Controller
{
    function homeView() {
        return view('index');
    }
    function favoritoView(){
        return view('favorito');
    }
    function loginView(){
        return view('login');
    }
    function cadastroView(){
        return view('cadastro');
    }
    function produtoView(){
        return view('produto');
    }
}
