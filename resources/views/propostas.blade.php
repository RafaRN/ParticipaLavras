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
                            <th>Status</th>
                            <th>Nº de Votos</th>
                            <th>Denunciar</th>
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
                                <td>{{$prop->classificacao}}</td>
                                <td>{{$prop->n_votos}}</td>
                                <td>
                                    <a href="/propostas/denunciar/{{$prop->id}}" class="btn btn-sm btn-primary">Denunciar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div align="middle" class="espacamento-20">
                <a href="/propostas/novo" type="submit" class="btn btn-primary" id="BtnNovaProposta">
                    Nova Proposta
                </a>
            </div>
        </div>
    </div>
</div>
@endsection