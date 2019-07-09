@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="alert alert-warning" role="alert" id="alerta">
                <b>ATENÇÃO:</b> Esteja convicto(a) da categoria a ser cadastrada. A exclusão de categorias não é permitida!
            </div>
            <div id="title">
                <h3> Cadastrar Categorias</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form id="formCadastrarCategorias" action="/categorias" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="InputNome">Nome Categoria:</label>
                            <input type="text" name="nomeCategoria" class="form-control" id="InputNome" placeholder="Nome Categoria">
                        </div>
                        <div align="middle">
                            <button type="submit" class="btn btn-primary" id="BtnCadastrar">Cadastrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection