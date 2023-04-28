@extends('layouts.app')

@section('title-block')

    Аккаунт

@endsection

@section('content')
    <h1>Аккаунт</h1>

    <div class="container mt-4">

        <form action="/modification" method="post">
            @csrf
            @foreach($data as $el)

                <input type="hidden" name="id" value="{{$el->id}}">

            <label for="Email">E-mail</label>
            <input type="text" class="form-control" name="mail" value="{{$el->mail}}" id="mail">
            <br>

            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" name="surname" value="{{$el->surname}}" id="surname">
            <br>

            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" value="{{$el->name}}" id="name">
            <br>

            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" name="patronymic" value="{{$el->patronymic}}" id="patronymic">
            <br>

            <label for="series">Серия паспорта</label>
            <input type="text" class="form-control" name="series" value="{{$el->series}}" id="series">
            <br>

            <label for="number">Номер паспотра</label>
            <input type="text" class="form-control" name="number" value="{{$el->number}}" id="number">
            <br>

            @endforeach
            <label for="password">Старый пароль</label>
            <input type="password" class="form-control" name="password" placeholder="" id="password">
            <label for="password">Новый пароль</label>
            <input type="password" class="form-control" name="password" placeholder="" id="password">
            <label for="password">Повторите новый пароль</label>
            <input type="password" class="form-control" name="password" placeholder="" id="password">
            <br>
            <button class="btn btn-success" type="submit">Изменить</button>
        </form>

    </div>
    <br>
    <a class="btn btn-success" href="{{ route('Authorization') }}"> Выход из аккаунта</a>
@endsection
