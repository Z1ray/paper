@extends('header.header')

@section('css')
    <link rel="stylesheet" href="{{ url('/css/addFile.css') }}">
@endsection

@section('main')
    <section>
        <form class="form_add" action="{{ route('addPost', $students->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="add_title">Добавить</div>
            <select name="thing" class="input">
                @foreach($things as $thing)
                    <option value="{{ $thing->id }}">{{ $thing->name }}</option>
                @endforeach
            </select>
            <textarea class="theme" name="theme" id="theme" cols="30" rows="10" placeholder="Тема"></textarea>
            <input name="file" type="file" class="input" placeholder="Файл">
            <button class="btn" type="submit">Отправить</button>
            <a href="{{ route('student', $students->id) }}" class="btn" type="submit">Отмена</a>
        </form>
    </section>
@endsection
