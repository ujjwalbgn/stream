<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <title>My App</title>


</head>
<body>
<div id="app">
    @include('layouts.header')

    <section class="section">
        <div class="container">
            <router-view></router-view>
        </div>
    </section>
</div>
<script src={{asset('js/app.js')}}></script>
</body>
</html>
