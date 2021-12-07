@extends('layouts.main')

@section('title', 'Galeri - Início')

@section('content')

<div id="topbar">
            <a href="/">
                <span style="margin-right: auto; cursor: pointer;">GALERI</span>
            </a>

            <a href="/images/create">
                <button id="uploadButton">UPLOAD</button>
            </a>

            <div id="user" style="margin-left: auto">Olá, Usuário   </div>

            <a href="/help">
                <span id="help">Ajuda</span>
            </a>

            <a href="/">
                <span id="quit">Sair</span>
            </a>
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
