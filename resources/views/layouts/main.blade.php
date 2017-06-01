<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  {{-- <link rel="stylesheet" href="{{ asset('js/jquery.min.js') }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset('js/bootstrap.min.js') }}"> --}}
  {{ Html::style(('css/bootstrap.css')) }}
  @if (isset($style))
      Hello style
  @endif
      </style>
  </style>
  </head>
  <body>
    <h1>Layout Main Karun</h1>
    <div class="container">
  @yield('content')
    </div>
  </body>
</html>
