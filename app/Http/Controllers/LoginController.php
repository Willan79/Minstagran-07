<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(!Auth::attempt($request->only('email', 'password'), $request->remember)){
            // with es una forma de llenar los valores de (session) en vista login
            //En este caso manda un mensaje a la vista de login por si hay un error de autenticación
            //El back te manda a la misma pagina que estas con el mensaje de error
            return back()->with('mensaje','Credenciales Incorectas');
        }
        //
        return redirect()->route('post.index', Auth::user()->username);

    }

}
