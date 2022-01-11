<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Satria Nugraha">
    <meta name="generator" content="Satria">
    <title>{{ Route::currentRouteName() }}</title>
    <link rel="shortcut icon" type="image/jpg" href="{{ asset('assets/img/favicon.ico') }}"/>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
    </style>
    <link href="{{ asset('assets/dist/css/navbar-top-fixed.css'); }}" rel="stylesheet">
  </head>
  <body>

    @include('layout.nav')
    @yield('isi')

    <script src="{{ asset('assets/dist/js/jquery-3.6.0.min.js'); }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js'); }}"></script>
  </body>
</html>
