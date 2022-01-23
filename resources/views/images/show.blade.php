@extends('layouts.main')

@section('title', $image->title)

@section('content')

<div class="centerContainer">
    <div id="imageContainer">
        <span>{{ $image->title}} - {{ date('d/m/y', strtotime($image->created_at)) }}</span>
        <img src="/img/images/{{ $image->image }}" alt="{{$image ->title}}" id="feedImage"/>
        <span>Enviado por: {{ $imageOwner['name'] }}</span>
    </div>
</div>

<a href="/home" id="goBackA">
    <span id="goBack">Voltar</span>
</a>

@endsection
