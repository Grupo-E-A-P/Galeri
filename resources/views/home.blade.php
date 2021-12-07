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
                    <span>{{ $image->title}} - {{ $image->id}}</span>
                    <img src="/img/images/{{ $image->image }}" alt="{{$image ->title}}" />
                    <div id="imgDate">07/12/2021</div>
                </div>
            @endforeach
        </div>
    </div>

    <div id="theme">
       <p>TEMA</p>
    </div>


@endsection
