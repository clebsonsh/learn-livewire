<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="bg-slate-800 text-white">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="flex">
    <nav class="border-r-2 border-black flex flex-col w-32 p-4 space-y-4">
        <a href="/" @class(['font-bold' => request()->is('/')])>Todos</a>
        <a href="/counter" @class(['font-bold' => request()->is('counter')])>Counter</a>
    </nav>
    <div class="w-full h-screen">
        {{ $slot }}
    </div>
</body>

</html>
