@extends('header.header')

@section('css')
    <link rel="stylesheet" href="css/teacher.css">
@endsection

@section('main')
    <section class="main">
        <div class="container">

            @foreach($teachers as $teacher)
                <div class="teacher_name">{{ $teacher->surname }} {{ $teacher->name }}</div>
                <div class="lesson">Предмет: {{ $teacher->thing->name }}</div>
            @endforeach

            <a href="{{ route('reg') }}" style="text-decoration: none" class="btn">
                Добавить ученика +
            </a>
            <table style="margin-top: 30px">
                <tr>
                    <th></th>
                    <th>Ученики</th>
                    <th>Группа</th>
                </tr>

                @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }} {{ $student->surname }}</td>
                            <td style="margin-right: 0; width: 100px">{{ $student->group->name }}</td>
                            <td style="margin-right: 0; width: 100px"><a href="{{ route('student', $student->id) }}" style="text-decoration:none; background-color: #112B3C; color: #EFEFEF" class="btn">Открыть</a></td>
                        </tr>
                @endforeach

            </table>
        </div>
    </section>
@endsection
