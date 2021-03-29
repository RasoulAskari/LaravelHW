<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <nav class="navbar navbar-expand-md bg-secondary navbar-light sticky-top">
      <div class="container">
        <a class="navbar-brand " href="/">
          <div class="overflow-hidden"><h1>Resto</h1></div>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse"data-target="#navbar" name="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">

          <ul class="navbar-nav  text-center">
            <li class="nav-item mr-2">
              <a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="/list">List</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="/add">Add</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="/search">Search</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item mr-2">
              <a class="nav-link" href="/register">Register</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
