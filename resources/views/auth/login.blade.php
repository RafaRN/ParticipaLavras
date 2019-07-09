@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div align="middle" id="conteudoCard">
                <div class="card" id="cardGlobal">
                    <h4 class="card-header">Autenticar Usuário</h4>

                    <div class="card-body">
                        <p class="card-text">Utilize seu <b>e-mail</b> e <b>senha</b> para entrar:</p>
                        <form id="formLogin" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail:</label>
                                <div class="col-md-5">
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" placeholder="E-mail" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="senha" class="col-md-4 col-form-label text-md-right">Senha</label>
                                <div class="col-md-5">
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" placeholder="Senha" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Lembrar-me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-5 offset-md-4">
                                    <button type="submit" class="btn btn-primary" id="BtnEntrar">
                                        Entrar
                                    </button>
                                    <div>
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Esqueceu sua senha?
                                            </a>
                                        @endif
                                    </div>
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
