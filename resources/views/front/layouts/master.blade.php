<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/fontawesome.css') }}">
  @yield('page_title')
</head>
<body>

    @yield('content')


<script src="{{ asset('front/js/jquery.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.js') }}"></script>
  <script src="{{ asset('front/js/fontawesome.js') }}"></script>
  <script src="{{ asset('front/js/counterup.js') }}"></script>
  <script src="{{ asset('front/js/waypoints.js') }}"></script>
  <script src="{{ asset('front/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
  <script>
    $('.counter').counterUp({
      delay: 10,
      time: 3000
    });
  </script>

@yield('js')
</body>
</html>
