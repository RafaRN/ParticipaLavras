@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Usuário</div>

                <div class="card-body">

                    <a class="nav-link" href="{{ route('perfil.usuario.atual') }}">Perfil</a>

                    <a class="nav-link" href="{{ route('categorias.novo') }}">Categoria</a>

                    <a class="nav-link" href="{{ route('propostas') }}">Propostas</a>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você está logado como usuário!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
