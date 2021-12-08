@extends('layouts.main')

@section('title', 'Galeri - Início')

@section('content')

<div id="topbar">
            <a href="/">
                <span style="margin-right: auto; cursor: pointer;">GALERI</span>
            </a>

            @auth
            <a href="/images/create">
                <button id="uploadButton">UPLOAD</button>
            </a>

            <div id="user" style="margin-left: auto">Olá, {{ Auth::user()->name }}</div>
            @endauth

            @guest
            <div id="user" style="margin-left: auto">Olá, Guest</div>
            @endguest

            <a href="/help">
                <span id="help">Ajuda</span>
            </a>

            @auth
            <form action="logout" method="POST">
                @csrf
                <a href="/logout" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    <span id="quit">Sair</span>
                </a>
            </form>
            @endauth
    </div>


    <div id="feedContainer">
        <div id="feed">
            @foreach($images as $image)
                <div id="imageContainer">
                    <span>{{ $image->title}}</span>
                    <img src="/img/images/{{ $image->image }}" alt="{{$image ->title}}" id="feedImage"/>
                    <div id="imgDate">{{ date('d/m/y', strtotime($image->created_at)) }}</div>
                </div>
            @endforeach
            @if(count($images) == 0)
                <span>Não há imagens. Comece enviado a sua!</span>
            @endif
        </div>
    </div>

    <div id="theme">
       <p>TEMA</p>
    </div>


@endsection
