<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsuariosController extends Controller
{
    function store(Request $request){
        $user = new User();
        
        $user->nome  = $request->nome;
        $user->email = $request->email;
        $user->senha = Hash::make($request->senha);

        $user->save();
        Auth::attempt(['email' => $user->email,'password' => $user->senha]);
        return redirect('/favoritos');
    }

    function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;

        if(Auth::attempt(['email' => $email,'password' => $senha])) {
            return redirect('/favoritos');
        } else {
            return redirect('/login?erro=1');
        }
    }

    function logout(Request $request){
        Auth::logout();
        return redirect('/');
    }

}
