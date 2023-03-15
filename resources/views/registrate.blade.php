@extends('header.header')

@section('css')
    <link rel="stylesheet" href="css/registration.css">
@endsection

@section('main')
    <section>
        <form class="form_registration" action="{{ route('post') }}" method="post">
            <div class="registration_title">Регистрация</div>
            <input name="name" class="input" type="text" placeholder="Имя">
            <input name="surname" class="input" type="text" placeholder="Фамилия">
            <input name="patronymic" class="input" type="text" placeholder="Отчество">
            <select name="group" class="input">
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            </select>
            <div class="pass_log">
                <input id="password" name="password" class="input" type="text" placeholder="Пароль">
                <input id="login" name="login" class="input" type="text" placeholder="Логин">
                <div style="text-align: center; cursor: pointer" id="btn" class="btn">Сгенерировать</div>
            </div>
            <button style="cursor: pointer" class="btn btn_reg" type="submit">Зарегистрировать</button>
            <a href="{{ route('teacher') }}" style="text-decoration: none" class="btn btn_otm" >Отмена</a>
            @csrf
        </form>
    </section>
@endsection
