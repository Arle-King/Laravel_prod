@extends('layouts.app')

@section('title-block')

    Аккаунт

@endsection

@section('content')

    <div class="container mt-4">

        <form action="/Account/{{$data->id}}/modification" method="post">
        <h1>Личный кабинет</h1>
            @csrf
            
            <input type="hidden" name="id" value="{{$data->id}}">

            <label for="Email">E-mail</label>
            <input type="text" class="form-control" name="mail" value="{{$data->mail}}" id="mail">
            <br>

            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" name="surname" value="{{$data->surname}}" id="surname">
            <br>

            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" id="name">
            <br>

            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" name="patronymic" value="{{$data->patronymic}}" id="patronymic">
            <br>

            <label for="series">Серия паспорта</label>
            <input type="text" class="form-control" name="series" value="{{$data->series}}" id="series">
            <br>

            <label for="number">Номер паспотра</label>
            <input type="text" class="form-control" name="number" value="{{$data->number}}" id="number">
            <br>

            
            <button class="btn btn-success" type="submit">Изменить</button>
            <br> <br>
            <a class="btn btn-success" href="{{ route('Authorization') }}"> Выход из аккаунта</a>
        </form>

        <form action="/Account/{{$data->id}}/delete" method="post">
        @csrf
            <input type="hidden" name="id" value="{{$data->id}}">
            <br>
            <button class="btn btn-success" type="submit">Удалить аккаунт</button>
        </form>

    </div>
    
@endsection
