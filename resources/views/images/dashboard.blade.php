@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')


<span style="font-size: 35px; margin-bottom: 20px;">
    Minhas Imagens
</span>

<div class="centerContainer">
    @if(count($images)>0)

    <div id="tableTop">
        <span>#</span>
        <span>Título</span>
        <span>Ações</span>
    </div>
    <div id="tableRest">
        @foreach($images as $image)
            <div class="tableItem">
                <span>{{ $loop->index + 1 }}</span>

                <a href="/images/{{ $image->id }}"> <span>{{ $image->title }}</span> </a>

                <div>
                    <a href="/"> <span>Editar </span> </a>
                    <a href="/"> <span>Deletar</span> </a>
                </div>
            </div>
        @endforeach
    </div>

    @else
    <p>Você não tem nenhuma imagem.
        <a href="/images/create">Envie uma agora! </a>
    </p>
    @endif

</div>

<a href="/home" id="goBackA">
    <span id="goBack">Voltar</span>
</a>

@endsection
