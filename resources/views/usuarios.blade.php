@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div id="title">
                <h3>Usuários</h3>
            </div>
            <div class="card">
                <div class="card-body">
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome Completo</th>
                            <th>RG</th>
                            <th>CPF</th>
                            <th>Gênero</th>
                            <th>Data de Nascimento</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}} {{$user->lastname}}</td>
                                <td>{{$user->rg}}</td>
                                <td>{{$user->cpf}}</td>
                                <td>{{$user->genre}}</td>
                                <td>{{$user->birth_date}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="/usuarios/apagar/{{$user->id}}" class="btn btn-sm btn-primary">Apagar </a>
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