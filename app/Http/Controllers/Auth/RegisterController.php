<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'rg' => ['required', 'string', 'min:7', 'max:10', 'unique:users'],
            'cpf' => ['required', 'string', 'digits:11', 'unique:users'],
            'genre' => ['in:Feminino, Masculino, Indefinido'],
            'birth_date' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        return User::create([
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'rg' => $data['rg'],
            'cpf' => $data['cpf'],
            'genre' => $data['opgenre'],
            'birth_date' => $data['birth_date'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    //Onde coloco essas coisas?
    public function messages() {
        return Validator::make([
          'required' => 'O campo :attribute é requerido',
          'rg.min' => 'O campo :attribute deve possuir no mínimo 7 caracteres',
          'rg.max' => 'O campo :attribute deve possuir no máximo 10 caracteres',
          'cpf.digits' => 'O campo :attribute deve possuir 11 dígitos',
          'email' => 'Formato de e-mail requerido',
        ]);
    }
    
}
