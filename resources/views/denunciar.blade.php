@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Denunciar - {{$prop->nome}}</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="/propostas/denunciar/{{$prop->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="InputDescricao">Proposta: {{$prop->descricao}}</label>
                        </div>
                        <div class="form-group">
                            <label for="InputDenuncia">Denuncia:</label>
                            <textarea name="denuncia" class="form-control" id="InputDenuncia" placeholder="Digite aqui sua denuncia..." rows="3"></textarea>
                        </div>
                        <div align="middle">
                            <button type="submit" class="btn btn-primary" id="BtnEnviarDenuncia">Enviar Denuncia</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection