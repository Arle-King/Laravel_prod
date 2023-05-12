@extends('layouts.app')

@section('title-block')

    Авторизация

@endsection

@section('content')

<div class="container mt-4">

    <form action="/Auth" method="post">
    @csrf
        <label for="mail"> E-mail </label>
        <input type="text" class="form-control" placeholder="Введите E-mail" name="mail_Auth">
            <br>
        <label for="password"> Пароль </label>
        <input type="password" class="form-control" placeholder="Введите пароль" name="pass_Auth">
            <br>
        <button class="btn btn-success" type="submit">Войти</button>
            <br>
            <br>
        <a class="btn btn-success" href="{{route('Registration')}}">Регистрация</a>
    </form>
</div>






<!--<div class="container mt-4">

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


        
    </div>-->

@endsection


