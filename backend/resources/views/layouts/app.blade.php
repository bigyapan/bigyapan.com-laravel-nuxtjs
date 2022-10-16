<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bigyapan.com - Backend</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('/css/normalize.css')}}">
</head>
<body class="antialiased">
<div id="app">
    <router-view></router-view>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
