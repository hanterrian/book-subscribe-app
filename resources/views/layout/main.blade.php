<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books - @yield('title')</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
<x-layout.header/>

<div class="container">
    @yield('content')
</div>

<x-layout.footer/>

@vite('resources/js/app.js')
@livewireScripts
</body>
</html>
