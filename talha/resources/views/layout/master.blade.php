<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'My App')</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

  <header>
    <!-- Navbar content -->
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <!-- Footer content -->
  </footer>

  <!-- Bootstrap JS and jQuery (place jQuery before Bootstrap JS) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
