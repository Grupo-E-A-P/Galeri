
@extends('layouts.main')

@section('title', 'Galeri - Cadastro')

@section('content')

<div class= "registerDiv">
    <form id="registerContainer" action="{{url('/salvar')}}" method="POST">
        @csrf
        <span id="title">Cadastro</span>
        <input type="text" placeholder="Nome"/>
        <input type="text" placeholder="Email"/>
        <input type="password" placeholder="Senha"/>
        <input type="password" placeholder="Confirme sua senha"/>
        <button id="createAccButton" type="submit">CRIAR CONTA</button>

        <a href="/">
            <span id="goBack">Voltar</span>
        </a>
    </form>
</div>


@endsection

