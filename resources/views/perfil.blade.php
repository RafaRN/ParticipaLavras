@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Perfil</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <div>
                        <p><b>Nome: </b>{{$userA->name}}</p>
                    </div>
                    <div>
                        <p><b>Sobrenome: </b>{{$userA->lastname}}</p>
                    </div>
                    <div>
                        <p><b>RG: </b>{{$userA->rg}}</p>
                    </div>
                    <div>
                        <p><b>CPF: </b>{{$userA->cpf}}</p>
                    </div>
                    <div>
                        <p><b>Gênero: </b>{{$userA->genre}}</p>
                    </div>
                    <div>
                        <p><b>Data de Nascimento: </b>{{$userA->birth_date}}</p>
                    </div>
                    <div>
                        <p><b>E-mail: </b>{{$userA->email}}</p>
                    </div>
                </div>
            </div>
            <div class="espacamento-20">
                <a href="" type="submit" class="btn btn-primary" id="BtnEditar">
                    Editar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection