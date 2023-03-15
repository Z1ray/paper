@extends('header.header')

@section('css')
    <link rel="stylesheet" href="css/enter.css">
@endsection

@section('main')
    <section>
        <form class="form_enter" action="#" method="post">
            <div class="enter_title">Вход</div>
            <input class="input" type="text" placeholder="Login">
            <input class="input" type="text" placeholder="Password">
            <button class="btn" type="submit">
                <svg width="53" height="40" viewBox="0 0 53 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 17V23C0 23.2917 0.0920143 23.5313 0.276043 23.7188C0.460068 23.9063 0.695217 24 0.98148 24H39.2593V31C39.2593 31.4375 39.4535 31.7396 39.842 31.9063C40.2305 32.0729 40.5883 32.0208 40.9155 31.75L52.6933 20.8125C52.8978 20.6042 53 20.3646 53 20.0938C53 19.8021 52.8978 19.5521 52.6933 19.3438L40.9155 8.28125C40.5883 7.98958 40.2305 7.92708 39.842 8.09375C39.4535 8.28125 39.2593 8.58333 39.2593 9V16H0.98148C0.695217 16 0.460068 16.0938 0.276043 16.2813C0.0920143 16.4688 0 16.7083 0 17Z" fill="#EFEFEF"/>
                </svg>
            </button>
        </form>
    </section>
@endsection
