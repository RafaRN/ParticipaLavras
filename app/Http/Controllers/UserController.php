<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserController extends Controller
{
    public function perfil()
    {
        $userA = auth()->user();
        return view('perfil',compact('userA'));
    }

    public function index()
    {
        $users = User::all();
        return view('usuarios', compact('users'));
    }

    public function create()
    {
        return view('cadastrar');
    }

    public function show($id)
    {
        //
    }

    public function editarSenha(){
        return view('auth/passwords/reset');
    }

    public function editPassword(Request $request)
    {
        $userA = auth()->user();
        if($userA->email == $request->input('email')){
            if($request->input('password') == $request->input('password_confirmation')){
                $userA->password = Hash::make($request->input('password'));
                $userA->save();
            }
            return redirect('/home');
        }
    }

    public function editarEmail()
    {
        return view('editarEmail');
    }

    public function editEmail(Request $request)
    {
        $userA = auth()->user();
        if($userA->email == $request->input('email')){
            if(Hash::check($request->input('password'), $userA->password)){
                $userA->email = $request->input('emailNovo');
                $userA->save();
            }
        }
        return redirect('/home');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if (isset($user)){
            $user->delete();  
        }
        return redirect('/usuarios');
    }
}
