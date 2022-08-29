<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credenciais =  $request->all(['email', 'password']); //[]

        //autenticação do usuario (email e password)

        $token =  auth('api')->attempt($credenciais);
        if ($token) {
            return response()->json([
                'token' => $token
            ], 200);
        } else {
            return response()->json(['error'=>'Usuáriio ou senha inválido!'], 403);
        }
        //retornar um jwt
        return 'login';
    }

    public function logout()
    {
        auth('api')->logout();

        return response()->json(['msg'=> 'Logout realizado com sucesso!']);
    }

    public function refresh()
    {
        $token = auth('api')->refresh();
        return response()->json(['token'=> $token]);
        
    }

    public function me()
    {
        
        return response()->json(auth()->user());
    }
}
