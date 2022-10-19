@extends('templates.template')

@section('content')
<nav class="navbar navbar-dark bg-dark">
    <h4 class="text-light"><strong>Pentagrama</strong></h4>
    <a href="{{url("dashboard")}}" class="d-block mr-0">
        <button class="btn btn-outline-success btn-">Voltar a tela inicial</button>
    </a>
</nav>

<!-- botão para cadastra -->

<div class="col-8 m-auto">
    @csrf
    <table class="table text-center mt-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            <!-- recebendo os dados -->

            @foreach($user as $users)
            <tr>
                <th scope="row">{{$users->id}}</th>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>
                    <a href="{{url("user/$users->id")}}">
                        <i class="fa-solid fa-file"></i>
                    </a>

                    <a href="{{url("user/$users->id/edit")}}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>

                    <a href="{{url("user/$users->id")}}" class="js-del">
                        <i class="fa-solid fa-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="{{url("assets/js/scriptUser.js")}}"></script>
@endsection