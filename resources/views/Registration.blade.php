@extends('layouts.app')

@section('title-block')

    Регистрация

@endsection

@section('content')

    <div class="container mt-4">

        <form action="/reg" method="post">
            @csrf

            <label for="Email">E-mail</label>
            <input type="text" class="form-control" name="mail" placeholder="Введите E-mail" id="mail">
            <br>

            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" name="surname" placeholder="Введите Фамилию" id="surname">
            <br>

            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" placeholder="Введите Имя" id="name">
            <br>

            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" name="patronymic" placeholder="Введите Отчество" id="patronymic">
            <br>

            <label for="series">Серия паспорта</label>
            <input type="text" class="form-control" name="series" placeholder="Введите Серия паспорта" id="series">
            <br>

            <label for="number">Номер паспотра</label>
            <input type="text" class="form-control" name="number" placeholder="Введите Номер паспотра" id="number">
            <br> <br>

            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>

    </div>



   <!-- <div class="container mt-4">

        <form action="/reg" method="post">
            @csrf

            <label for="Email">E-mail</label>
            <input type="text" class="form-control" name="mail" placeholder="Введите E-mail" id="mail">
            <br>

            <label for="surname">Фамилия</label>
            <input type="text" class="form-control" name="surname" placeholder="Введите Фамилию" id="surname">
            <br>

            <label for="name">Имя</label>
            <input type="text" class="form-control" name="name" placeholder="Введите Имя" id="name">
            <br>

            <label for="patronymic">Отчество</label>
            <input type="text" class="form-control" name="patronymic" placeholder="Введите Отчество" id="patronymic">
            <br>

            <label for="E-mail">Серия паспорта</label>
            <input type="text" class="form-control" name="series" placeholder="Введите Серия паспорта" id="series">
            <br>

            <label for="E-mail">Номер паспотра</label>
            <input type="text" class="form-control" name="number" placeholder="Введите Номер паспотра" id="number">
            <br>

            <label for="E-mail">Пароль</label>
            <input type="password" class="form-control" name="password" placeholder="Введите Пароль" id="password">
            <br> <br>

            <button class="btn btn-success" type="submit">Сохранить</button>
        </form>

    </div> -->



 

@endsection
