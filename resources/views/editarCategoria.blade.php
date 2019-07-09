@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3> Editar Categoria</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="formEditarCategorias" action="/categorias/{{$cat->id}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=InputNomeAtual>Nome Atual: {{$cat->nome}}</label>
                        </div>
                        <div class="form-group">
                            <label for="InputNovoNome">Novo Nome:</label>
                            <input type="text" name="nomeCategoria" class="form-control" id="InputNome" placeholder="Novo Nome">
                        </div>
                        <div align="middle">
                            <button type="submit" class="btn btn-primary" id="BtnEditar">Editar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection