@extends('templates.template')

@section('content')
<nav class="navbar navbar-dark bg-dark">
    <h4 class="text-light"><strong>Pentagrama</strong></h4>
    <a href="{{url("dashboard")}}" class="d-block mr-0">
        <button class="btn btn-outline-success btn-">Voltar a tela inicial</button>
    </a>
</nav>

<!-- botão para cadastra -->

<div class="text-center mt-3 mb-4">
    <a href="{{url('city/create')}}">
        <button class="btn btn-success">Cadastrar</button>
    </a>
</div>

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Estado</th>
                <th scope="col">Data Da Fundação</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

        <!-- recebendo os dados -->

            @foreach($city as $cities)
            <tr>
                <th scope="row">{{$cities->id}}</th>
                <td>{{$cities->name}}</td>
                <td>{{$cities->state}}</td>
                <td>{{date('d/m/Y', strtotime($cities->foundation_date))}}</td>
                <td>
                    <a href="{{url("city/$cities->id")}}">
                        <i class="fa-solid fa-file"></i>
                    </a>

                    <a href="{{url("city/$cities->id/edit")}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{url("city/$cities->id")}}" class="js-del">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="{{url("assets/js/script.js")}}"></script>
@endsection