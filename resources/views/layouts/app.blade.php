<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
  <main class="flex flex-col">
    @yield('content')
  </main>

  @yield('extra')
  <script src="{{ URL::asset('js/app.js') }}"></script>
</body>
</html>