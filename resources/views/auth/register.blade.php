@extends('layouts.app')

@section('content')
<div align="middle" id="conteudoCard">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h4 class="card-header">Cadastrar</h4>
                    <div class="card-body">
                        <p class="card-text">Coloque seus dados para <b>criar</b> sua conta:</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row">
                            
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nome:</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback alert alert-danger" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        
                            <div class="form-group row">
                            
                                <label for="lastname" class="col-md-4 col-form-label text-md-right">Sobrenome:</label>
                                <div class="col-md-6">
                                    <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required>
                                
                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                            
                                <label for="rg" class="col-md-4 col-form-label text-md-right">RG:</label>
                                <div class="col-md-6">
                                    <input id="rg" type="text" class="form-control{{ $errors->has('rg') ? ' is-invalid' : '' }}" name="rg" value="{{ old('rg') }}" required>
                                
                                    @if ($errors->has('rg'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('rg') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                            
                                <label for="cpf" class="col-md-4 col-form-label text-md-right">CPF:</label>
                                <div class="col-md-6">
                                    <input id="cpf" type="text" class="form-control{{ $errors->has('cpf') ? ' is-invalid' : '' }}" name="cpf" value="{{ old('cpf') }}" required>
                                    
                                    @if ($errors->has('cpf'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('cpf') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                            
                                <label for="genre" class="col-md-4 col-form-label text-md-right">Gênero:</label>
                                <div class="col-md-6">
                                    <div class="radio">
                                        <label><input value="Feminino" type="radio" name="opgenre" checked>Feminino</label>
                                    </div>
                                    <div class="radio">
                                        <label><input value="Masculino" type="radio" name="opgenre">Masculino</label>
                                    </div>
                                    <div class="radio">
                                        <label><input value="Indefinido" type="radio" name="opgenre">Indefinido</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                            
                                <label for="birth_date" class="col-md-4 col-form-label text-md-right">Data de Nascimento:</label>
                                <div class="col-md-6">
                                    <input id="birth_date" type="date" class="form-control{{ $errors->has('birth_date') ? ' is-invalid' : '' }}" name="birth_date" value="{{ old('birth_date') }}" required>
                                
                                    @if ($errors->has('birth_date'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('birth_date') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail:</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Senha:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Senha:</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
