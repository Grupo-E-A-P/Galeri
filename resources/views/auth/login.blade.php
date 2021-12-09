@extends('layouts.main')

@section('title', 'Galeri')

@section('content')

        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form id="loginContainer" method="POST" action="{{ route('login') }}">
            @csrf
            <span id="title">Login</span>
            <input type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
            <input type="password" name="password" required autocomplete="current-password" placeholder="Senha"/>

            <a>
                <button id="enterAccButton" >{{ __('ENTRAR') }}</button>
            </a>

            <!-- @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Esqueceu sua senha?') }}
                </a>
            @endif -->

            <!-- <label for="remember_me">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span>{{ __('Lembre-se de mim') }}</span>
            </label> -->

            <a href="/">
                <span id="goBack">Voltar</span>
            </a>
	    </form>

@endsection
