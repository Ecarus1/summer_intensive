@extends('main')


@section('title')
    Авторизация
@endsection


@section('link')
    <link rel="stylesheet" href="/css/login.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
    <form class="form" method="POST">
        @csrf
        <div class="title">Привет</div>

        <div class="subtitle">Давай авторизируемся!</div>

        <div class="input-container ic1">
            <input id="name" name="name" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="firstname" class="placeholder">Логин</label>
        </div>

        <div class="input-container ic2">
            <input id="password" name="password" class="input" type="text" placeholder=" " />
            <div class="cut"></div>
            <label for="lastname" class="placeholder">Пароль</label>
        </div>
        {{-- <button type="submit" class="submit">Авторизироваться</button> --}}
        <input type="submit" class="submit" name="sendMe" value="Авторизироваться">
        <div class="div_registration">
            <a href="/registration" class="href_registration">Регистрация</a>
        </div>
    </form>
@endsection