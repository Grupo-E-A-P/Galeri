@extends('layouts.main')

@section('title', 'Galeri - Início')

@section('content')

<div id="topbar">
            <a href="/">
                <span style="margin-right: auto; font-weight: bold; cursor: pointer;">GALERI</span>
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

            @auth
                <a href="/dashboard">
                    <span id="user" style="margin-left: 20px">Minhas imagens</span>
                </a>
            @endauth

            <a href="/help">
                <span id="help">Ajuda</span>
            </a>

            @auth

            <form action="logout" method="POST" style="font-size: 0;">
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
                    <span>{{ $image->title}} - {{ date('d/m/y', strtotime($image->created_at)) }}</span>
                    <img src="/img/images/{{ $image->image }}" alt="{{$image ->title}}" id="feedImage"/>
                    <a href="/images/{{ $image->id }}">
                        <button>Saiba Mais</button>
                    </a>
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
