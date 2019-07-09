@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Verifique seu Endereço de E-mail</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Um novo link de verificação foi enviado para o seu endereço de e-mail.
                        </div>
                    @endif

                    <div>
                        Antes de prosseguir, verifique seu e-mail em busca de um link de verificação.
                    </div>
                    <div>
                        Se você não recebeu um e-mail, <a href=""> clique aqui para solicitar outro.</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
