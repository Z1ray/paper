<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/css/header.css') }}">
    @yield('css')
    <title>Document</title>
</head>
<body>
<section class="header">
    <div class="container">
        <header>
            <a href="{{ route('teacher') }}" class="svg">
                <svg width="53" height="53" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M49.6875 41.4062L47.3456 39.0643L43.0625 43.3474V29.8125H39.75V43.3474L35.4669 39.0643L33.125 41.4062L41.4062 49.6875L49.6875 41.4062Z" fill="#F66B0E"/>
                    <path d="M29.8125 46.375H13.25V6.62501H26.5V16.5625C26.5026 17.4402 26.8525 18.2813 27.4731 18.9019C28.0937 19.5226 28.9348 19.8724 29.8125 19.875H39.75V24.8438H43.0625V16.5625C43.0683 16.3448 43.027 16.1285 42.9412 15.9283C42.8554 15.7282 42.7273 15.549 42.5656 15.4031L30.9719 3.80939C30.8261 3.64765 30.6469 3.51946 30.4467 3.43368C30.2466 3.3479 30.0302 3.30656 29.8125 3.31251H13.25C12.3723 3.31514 11.5313 3.66497 10.9106 4.28562C10.29 4.90627 9.94012 5.74729 9.9375 6.62501V46.375C9.94012 47.2527 10.29 48.0938 10.9106 48.7144C11.5313 49.3351 12.3723 49.6849 13.25 49.6875H29.8125V46.375ZM29.8125 7.28751L39.0875 16.5625H29.8125V7.28751Z" fill="#F66B0E"/>
                </svg>
            </a>
{{--            <div class="icon">--}}
{{--                <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path d="M8.75 21.875V17.5H19.6875V13.125H8.75V8.75L2.1875 15.3125L8.75 21.875ZM10.9375 19.6875V28.4375H21.875V35L35 28.4375V0L10.9375 0V10.9375H13.125V2.1875H30.625L21.875 6.5625V26.25H13.125V19.6875H10.9375Z" fill="#EFEFEF"/>--}}
{{--                </svg>--}}
{{--            </div>--}}
        </header>
    </div>
</section>
@yield('main')
<script src="js/main.js"></script>
</body>
</html>
