@extends('layouts.main')

@section('title', 'Editando: ' . $image->title)

@section('content')

<div class="centerContainer">
    <span>Edite sua imagem</span>
    <form action="/images/update/{{ $image->id }}" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center;">
        @csrf
        @method('PUT')
        <input type="text" placeholder="Título da imagem" name="title" value="{{ $image->title }}"/>
        <img src="/img/images/{{ $image->image }}" alt="{{ $image->title }}" id="feedImage" style="max-width: 200px; margin: 20px 0 20px 0;"/>
        <input type="file" id="image" name="image" />
        <button id="createAccButton" type="submit">EDITAR IMAGEM</button>
    </form>
</div>

<a href="/home" id="goBackA">
    <span id="goBack">Voltar</span>
</a>


@endsection
