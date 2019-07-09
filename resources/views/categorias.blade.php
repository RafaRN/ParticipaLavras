@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Categorias</h3>
            </div>
            <div class="card">
                <div class="card-body">
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Categoria</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cats as $cat)
                            <tr>
                                <td>{{$cat->id}}</td>
                                <td>{{$cat->nome}}</td>
                                <td>
                                    <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            <div align="middle" class="espacamento-20">
                <a href="/categorias/novo" type="submit" class="btn btn-primary" id="BtnNovaCategoria">
                    Nova Categoria
                </a>
            </div>
        </div>
    </div>
</div>
@endsection