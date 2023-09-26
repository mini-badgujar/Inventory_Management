<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inventry Management</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

</head>

<body class="p-5 m-5 bg-slate-800">
    {{ $slot }}
</body>

</html>
