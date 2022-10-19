@extends('templates.template')
@section('content')

<!-- Pagina inicial -->

<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-center text-gray-800 leading-tight">
            {{ __('Pentagrama') }}
        </h1>
    </x-slot>
    <hr>

    <h5 class="mt-5 text-center">Visualizar Tabelas</h5>
    <div class="mt-5 text-center">
        <span>Deseja ver as cidades? </span>
        <a href="/city">
            <button class="btn btn btn-outline-dark btn-sm">Cidades</button>
        </a>
        <div class="mt-4">
            <span>Deseja ver os bairros? </span>
            <a href="/neighborhood">
                <button class="btn btn btn-outline-dark btn-sm">Bairros</button>
            </a>
        </div>
        <div class="mt-4">
            <span>Deseja ver os Usuários? </span>
            <a href="/user">
                <button class="btn btn btn-outline-dark btn-sm">Usuários</button>
            </a>
        </div>
    </div>
    </div>
</x-app-layout>

@endsection