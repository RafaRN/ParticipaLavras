@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Excluir Conta</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <p>Antes da exclusão da sua conta, tenha certeza que é realmente o que deseja. 
                            Suas propostas não poderão ser deletadas, mas ...
                        </p>
                    </div>
                </div>
            </div>
            <div align="middle" class="espacamento-20">
                <a href="" type="submit" class="btn btn-primary" id="BtnExcluirConta">
                    Excluir Conta
                </a>
            </div>
        </div>
    </div>
</div>
@endsection