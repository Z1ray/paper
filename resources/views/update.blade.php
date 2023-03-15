@extends('header.header')

@section('css')
    <link rel="stylesheet" href="{{ url('/css/student.css') }}">
@endsection

@section('main')
    <section class="main">
        <div class="container">
            <table>
                <tr>
                    <th>Предмет</th>
                    <th>Тема</th>
                    <th>Оценка</th>
                </tr>
                <form action="{{ route('updateOne', $paper->id)}}" method="post">
                    <tr>
                        <td>{{ $paper->thing->name }}</td>
                        <td>{{ $paper->theme }}</td>
                        <td style="text-align: center"><input class="input_td" style="width: 20px; text-align: center; font-size: 20px; border: none; background-color: rgba(0,0,0, .0)" name="grade" type="text" value="{{ $paper->grade }}"></td>
                        <td style="margin-right: 0; width: 100px">
                            <a href="{{ url('/storage/' . $paper->file) }}" style="text-decoration:none; background-color: #112B3C; color: #EFEFEF" class="btn">Открыть</a>
                        </td>
                        <td><button class="btn">Сохранить</button></td>
                    </tr>
                    @csrf
                </form>
            </table>
        </div>
    </section>
@endsection
