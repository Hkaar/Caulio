<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @vite('resources/css/app.css')
    </head>
    <body class="antialiased">
        <div class="flex flex-col">
            <h1 class="text-white bg-slate-900">Hello</h1>
            <h1 class="text-amber-800 bg-slate-500">World</h1>
            <h2 class="text-blue-800 bg-slate-500"></h2>
        </div>
    </body>
</html>
