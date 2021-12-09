@extends('layouts.main')

@section('title', 'Galeri - Cadastro')

@section('content')
    <div style="display: flex; flex: 1; align-items: center;">
        <x-slot name="logo">
        </x-slot>

        <x-jet-validation-errors class="mb-4" />
        <form id="registerContainer" action="{{ route('register') }}" method="POST">
            @csrf
            <span id="title">Cadastro</span>
            <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Nome"/>
            <input type="email" name="email" :value="old('email')" required placeholder="Email"/>
            <input type="password" name="password" required autocomplete="new-password" placeholder="Senha"/>
            <input type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="Confirme sua senha"/>

            <button id="createAccButton" type="submit">{{ __('CRIAR CONTA')}}</button>

            <a href="{{ route('login') }}">
                    {{ __('Já se cadastrou?') }}
            </a>

            <a href="/">
                <span id="goBack">Voltar</span>
            </a>
        </form>
    </div>

@endsection

