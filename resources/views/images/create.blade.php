@extends('layouts.main')

@section('title', 'Galeri')

@section('content')

<div class="centerContainer">
    <span>Envie sua imagem</span>
    <form action="/images" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction: column; align-items: center;">
        @csrf
        <input type="text" placeholder="Título da imagem" name="title"/>
        <input type="file" id="image" name="image" />
        <button id="createAccButton" type="submit">ENVIAR IMAGEM</button>
    </form>
</div>

<a href="/home" id="goBackA">
    <span id="goBack">Voltar</span>
</a>


@endsection
