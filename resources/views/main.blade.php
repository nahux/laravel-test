<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
</head>

<body>
  <header>
    <nav id="topNav" class="topNav">
      <a href="{{ route('home.index') }}" class="{{ Route::currentRouteNamed('home.index') ? 'active' : '' }}"><img src="" alt="Logo"></a>
      {{-- <a href="{{ route('season.index') }}" class="{{ Route::currentRouteNamed('season.index') ? 'active' : '' }}">Seasons</a> --}}
      {{-- <a href="{{ route('team.index') }}" class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">Teams</a> --}}
      <a href="{{ route('driver.index') }}" class="{{ Route::currentRouteNamed('driver.index') ? 'active' : '' }}">Drivers</a>
      <a href="{{ route('home.about') }}" class="{{ Route::currentRouteNamed('home.about') ? 'active' : '' }}">About</a>
      <a href="{{ route('home.contact') }}" class="{{ Route::currentRouteNamed('home.contact') ? 'active' : '' }}">Contact</a>
      <button id="toggleNavBtn" class="menu-icon" onclick="toggleNav()">
        <i id="open-icon" class="fa-solid fa-bars" aria-label="Open Navigation Menu"></i>
        <i id="close-icon" class="fa-solid fa-xmark" aria-label="Close Navigation Menu"></i>
      </button>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <div id="scripts">
    @yield('scripts')
    <script>
      function toggleNav() {
        var topNav = document.getElementById('topNav');
        topNav.classList.toggle('responsive');
      }
    </script>
  </div>
</body>

</html>
