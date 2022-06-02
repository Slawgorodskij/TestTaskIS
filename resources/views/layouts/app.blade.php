<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Тестовое задание</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Rubik:ital,400,500,600,700,900&display=swap"
        rel="stylesheet"
    />

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@stack('styles')

<!-- icon -->

    <link rel="shortcut icon" href="/storage/images/logo.ico"/>

    <!-- Scripts -->

    <script src="{{ asset('js/app.js') }}" defer></script>
{{--    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>--}}


</head>
<body>
<div id="app">
    @include('templates.header')

    @yield('content')

    @include('templates.footer')
</div>

</body>

</html>
