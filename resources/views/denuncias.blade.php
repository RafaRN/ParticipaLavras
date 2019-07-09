@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div id="title">
                <h3>Denuncias</h3>
            </div>
            <div class="card">
                <div class="card-body">
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Denuncia</th>
                            <th>Proposta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dens as $den)
                            <tr>
                                <td>{{$den->id}}</td>
                                <td>{{$den->descricao}}</td>
                                @foreach($props as $prop)
                                    @if($prop->id == $den->proposta_id)
                                        <td>{{$prop->nome}}</td>
                                    @endif
                                @endforeach
                                <td>
                                    <a href="/denuncias/apagarProposta/{{$den->id}}/{{$den->proposta_id}}" class="btn btn-sm btn-primary">Apagar</a>
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