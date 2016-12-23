<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
  <script src="{!! asset('jquery/jquery-3.0.0.min.js')!!}"></script>
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <style>
  @font-face { src: url("{!! asset('font/hindi.ttf') !!}"); font-family: Kruti Dev 010;  }
  body{
  		font-family: Kruti Dev 010;
	}
  </style>
</head>
<body>
  <div class="container">
  @include('shared.navbar')
  @yield('content')
  </div>
</body>
