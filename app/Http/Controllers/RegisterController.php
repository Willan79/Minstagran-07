<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {

        //Validación
        $request->validate([

            'name' => 'required',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Se debe importar User
        // Incertar en la base de datos Equivale a un INSERT
        User::create([
            'name' => $request->name,
            'username' => Str::slug($request->username),
            'email' => $request->email,
            'password' => $request->password,
        ]);

        //Redireccionar al usuario
        return redirect()->route('post.index');

    }
}
