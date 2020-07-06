<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    function store(Request $request){
        $user = new User();
        
        $user->nome  = $request->nome;
        $user->email = $request->email;
        $user->senha = Hash::make($request->senha);

        $user->save();

        return 'Usuario criado com sucesso...';
    }

}
