@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div id="title">
                <h3>Teste</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    @foreach($cats as $cat)
                        <div>
                            <a href="" type="submit" class="" id="{{$cat->id}}">
                                {{$cat->nome}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div id="title">
                <h3>Propostas</h3>
            </div>
            <div class="card">
                <div class="card-body">
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Proposta</th>
                            <th>Descrição</th>
                            <th>Categoria</th>
                            <th>Autor</th>
                            <th>Nº de Votos</th>
                            <th>Deletar</th>
                            <th>Classificar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($props as $prop)
                            <tr>
                                <td>{{$prop->nome}}</td>
                                <td>{{$prop->descricao}}</td>
                                @foreach($cats as $cat)
                                    @if($cat->id == $prop->categoria_id)
                                        <td>{{$cat->nome}}</td>
                                    @endif
                                @endforeach
                                @foreach($users as $user)
                                    @if($user->id == $prop->usuario_id)
                                        <td>{{$user->name}} {{$user->lastname}}</td>
                                    @endif
                                @endforeach
                                <td>{{$prop->n_votos}}</td>
                                <td>
                                    <a href="/propostas/apagar/{{$prop->id}}" class="btn btn-sm btn-danger">Apagar </a>
                                </td>
                                <td>
                                    <form action="/propostas-admin/{{$prop->id}}" method="POST">
                                        @csrf
                                        <p>{{$prop->classificacao}}</p>
                                        <div class="form-group">
                                            <select name="opClassificacao" class="form-control" id="formControlSelectClassificacao">
                                                <option value="Finalizada">Finalizada</option>
                                                <option value="Em Andamento">Em Andamento</option>
                                                <option value="Negada">Negada</option>
                                                <option value="Pendente">Pendente</option>
                                            </select>
                                        </div>
                                        <div class="espacamento-20">
                                            <button  type="submit" class="btn btn-primary">
                                                Classificar
                                            </button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection