<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
  <header>
    <nav>
      <a href="{{ route('home.index') }}"><img src="" alt="Logo"></a>
      <a href="{{ route('home.index') }}">Home</a>
      <a href="{{ route('home.about') }}">About</a>
      <a href="{{ route('home.contact') }}">Contact</a>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <div id="scripts">
    @yield('scripts')
  </div>
</body>

</html>
