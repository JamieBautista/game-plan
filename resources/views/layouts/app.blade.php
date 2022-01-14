<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Game Plan</title>

        <meta name="title" content={{ @$seo['title'] }}>
        <meta name="description" content={{ @$seo['description'] }}>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
        <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>

    </head>
    <body>
        @if(@$url != 'login')
            @include('layouts.header')
        @endif

        @yield('content')

        @yield('added-scripts')
    
    </body>
</html>
