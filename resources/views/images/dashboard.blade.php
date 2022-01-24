@extends('layouts.main')

@section('title', 'Galeri - Dashboard')

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
                    <a href="/images/edit/{{ $image->id }}">
                        <button id="editButton">EDITAR</button>
                    </a>
                    <form action="/images/{{ $image->id}}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <button id="deleteButton" type="submit"  style="margin-top: 5px;">DELETAR</button>
                    </form>
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
