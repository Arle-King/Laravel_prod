@extends('layouts.app')

@section('title-block')

    Авторизация

@endsection

@section('content')

    <div class="container mt-4">

        <form action="/all" method="post">
            @csrf
            <label for="mail">E-mail</label>
            <input type="text" class="form-control" name = "mail">
            <br>

            <label for="password">Password</label>
            <input type="password" class="form-control" name = "password">
            <br>

            <button class="btn btn-success" type="submit">Войти</button>
            <br> <br>
        </form>

        <a class="btn btn-success" href="{{ route('Registration') }}">Регистрация</a>

        <!-- <h3>E-mail</h3>
        <input type="text">

        <h3>Пароль</h3>
        <input type="password"> <br>

        <a href = "{{ route('Account') }}">Войти</a> <br>
        <a href = "{{ route('Registration') }}">Зтрироваться</a> -->
    </div>

@endsection


