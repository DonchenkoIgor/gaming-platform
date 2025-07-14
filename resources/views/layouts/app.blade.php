<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Website</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/image.css')}}">
    <link rel="stylesheet" href="{{asset('css/hero.css')}}">
    <link rel="stylesheet" href="{{asset('css/games.css')}}">
    <link rel="stylesheet" href="{{asset('css/email.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="stylesheet" href="{{asset('css/about.css')}}">
</head>
<body>
<div class="wrapper">
    @include('components.header')

    @yield('mainContent')
</div>

@yield('supportContent')

@include('components.footer')

</body>
</html>
