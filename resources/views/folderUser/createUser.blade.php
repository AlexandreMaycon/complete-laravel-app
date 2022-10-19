@extends('templates.template')
@section('content')
<nav class="navbar navbar-dark bg-dark">
    <h4 class="text-light"><strong>Pentagrama</strong></h4>
    <a href="{{url("user")}}" class="d-block mr-0">
        <button class="btn btn-outline-success btn-">Voltar</button>
    </a>
</nav>

<!-- Ifs para testar se está na tela de cadastro ou editar -->

<div class="text-center mt-3 mb-4">
    <h2>@if(isset($user)) Editar @else Cadastrar @endif</h2>
</div>

<div class="col-8 m-auto">

    <!-- @if(isset($errors) && count($errors)>0)
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
                {{$erro}}<br>
            @endforeach -->
</div>
<!-- @endif -->
@if(isset($user))
<form name="formEdit" id="formEdit" method="post" action="{{url("user/$user->id")}}">
    @method('PUT')
    @else

    <!-- formulario para pegar os dados -->

    <form name="formCad" id="formCad" method="post" action="{{url('user')}}">
        @endif
        @csrf
        <input class="form-control" type="text" name="name" id="name" placeholder="Nome:" value="{{$user->name ?? ''}}" required><br>
        <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{$user->email ?? ''}}" required><br>
        <input class="btn btn-primary" type="submit" value="@if(isset($user)) Editar @else Cadastrar @endif">
    </form>
    </div>
    @endsection