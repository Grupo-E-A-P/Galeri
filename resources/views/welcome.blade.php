@extends('layouts.main')

@section('title', 'Galeri')

@section('content')


    <div class="centerContainer">

        <span id="welcomeTitle">Uma galeria de imagens, sempre variando!</span>
        <span id="text">O Galeri busca o compartilhamento de pinturas, desenhos, imagens e outras artes visuais através de um tema que muda regularmente.</span>
        <a href="/register">
            <button id="loginButton" >CADASTRE-SE GRATUITAMENTE</button>
        </a>

        <span id="text2">Já tem uma conta?</span>
        <a href="/login">
            <span id="logintext">LOGIN</span>
        </a>

    </div>


@endsection

