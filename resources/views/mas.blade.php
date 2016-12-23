<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <title>@yield('title')</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
  <script src="{!! asset('jquery/jquery-3.0.0.min.js')!!}"></script>
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>
  <div class="container">
  @yield('content')
  </div>
</body>
