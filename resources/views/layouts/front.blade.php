<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--layouts front--}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class ="container">
        <div class ="row">
            @yield('content')
        </div>
    </div>
</body>
</html>