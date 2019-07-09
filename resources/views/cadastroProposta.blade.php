@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Cadastrar Proposta</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Preencha os campos para cadastrar propostas referentes aos problemas encontrados por você:</p>
                    <form id="formCadastrarProposta" action="/propostas" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="CategoriaProposta">Categoria da Proposta:</label>
                            <div class="form-group">
                                <select name="opCategoria" class="form-control" id="formControlSelectProposta">
                                    @foreach($cats as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="InputNomeProposta">Nome da Proposta: </label>
                            <input type="text" name="nomeProposta" class="form-control" id="InputNomeProposta" placeholder="Nome da Proposta">
                        </div>
                        <div class="form-group">
                            <label for="TextareaProposta">Proposta:</label>
                            <textarea class="form-control" name="descricaoProposta" id="TextareaProposta" rows="3"></textarea>
                        </div>
                        <div align="middle" class="espacamento-20">
                            <button type="submit" class="btn btn-primary">
                                Enviar Proposta
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection