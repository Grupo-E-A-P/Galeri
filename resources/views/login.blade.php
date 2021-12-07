@extends('layouts.main')

@section('title', 'Galeri')

@section('content')

    <div id="loginContainer">
        <span id="title">Login</span>
		<input type="text" placeholder="Email"/>
		<input type="password" placeholder="Senha"/>
        <a href="/home">
            <button id="enterAccButton" onclick="handleSignIn()">ENTRAR</button>
        </a>
        <a href="/">
            <span id="goBack">Voltar</span>
        </a>
	</div>

@endsection

