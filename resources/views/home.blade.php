@extends('layouts.main')

@section('title', 'Galeri - Início')

@section('content')
    <div id="topbar">
            <a href="/">
                <span style="margin-right: auto; cursor: pointer;">GALERI</span>
            </a>

            <button id="uploadButton">UPLOAD</button>

            <div id="user" style="margin-left: auto">Olá, {{ $nome }}</div>

            <a href="/help">
                <span id="help">Ajuda</span>
            </a>

            <a href="/">
                <span id="quit">Sair</span>
            </a>
    </div>

    <div id="feedContainer">
        <div id="feed"></div>
    </div>

    <div id="theme">
       <p>TEMA</p>
    </div>

@endsection
