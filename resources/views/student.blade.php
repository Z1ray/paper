@extends('header.header')

@section('css')
    <link rel="stylesheet" href="{{ url('/css/student.css') }}">
@endsection

@section('main')
    <section class="main">
        <div class="container">
            <div class="student_name"> {{ $student->name }} {{ $student->surname }}</div>
            <div class="student_group">Группа: {{ $student->group->name }}</div>
            <div style="margin-top: 24px" class="student_name">Логин: {{ $student->login }}</div>
            <div style="margin-bottom: 40px" class="student_group">Пароль: {{ $student->password }}</div>
            <a href="{{ route('addFile', $student->id) }}" class="btn">
                Добавить файл +
            </a>
            <table>
                <tr>
                    <th>Предмет</th>
                    <th>Тема</th>
                    <th>Оценка</th>
                </tr>
                    @if(count($papers))
                        @foreach($papers as $paper)
                        <tr class="trd">
                            <td>{{ $paper->thing->name }}</td>
                            <td>{{ $paper->theme }}</td>
                            <td class="grade" style="text-align: center">{{ $paper->grade }}</td>
                            <td style="margin-right: 0; width: 100px"><a href="{{ route('update', $paper->id) }}" style="text-decoration:none; background-color: #112B3C; color: #EFEFEF" class="btn">Проверить</a></td>
                        </tr>
                        @endforeach
                    @endif
            </table>
        </div>
    </section>
    <script></script>
@endsection
