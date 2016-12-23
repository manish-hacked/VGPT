<html>
<head>
  <title>VGPT</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
  <script src="{!! asset('jquery/jquery-3.0.0.min.js')!!}"></script>
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>
  <div class="container" style="vertical-align: middle; padding:50px;display: table;">
    <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
      <div align="center">
        <div class="container">
          <div class="jumbotron">
            <h1>LEADERBOARD</h1>
          </div>
        </div>
        <div class="container">
          <a href="/Laravel/VGPT/public/api/v1/ranks/today" class="btn btn-info btn-lg" role="button">TODAY RANKBOARD</a>
          <a href="/Laravel/VGPT/public/api/v1/ranks/week" class="btn btn-info btn-lg" role="button">WEEK RANKBOARD</a>
          <a href="/Laravel/VGPT/public/api/v1/ranks/month" class="btn btn-info btn-lg" role="button">MONTH RANKBOARD</a>
        </div>
      </div>
  </div>
  </div>
</body>
