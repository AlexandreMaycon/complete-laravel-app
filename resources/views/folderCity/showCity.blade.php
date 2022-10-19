@extends('templates.template')
@section('content')
<nav class="navbar navbar-dark bg-dark">
    <h4 class="text-light"><strong>Pentagrama</strong></h4>
    <a href="{{url("city")}}" class="d-block mr-0">
        <button class="btn btn-outline-success btn-">Voltar</button>
    </a>
</nav>

<h3 class="text-center mt-5">Dados</h3>

<div class="d-flex justify-content-center text-center mt-5">

    <!-- Recebendo os Dados -->

    <div class="card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{$city->id}}</li>
            <li class="list-group-item">Cidade: {{$city->name}}</li>
            <li class="list-group-item">Estado: {{$city->state}}</li>
            <li class="list-group-item">Data De Fundação: {{date('d/m/Y', strtotime($city->foundation_date))}}</li>
        </ul>
    </div>
</div>
@endsection