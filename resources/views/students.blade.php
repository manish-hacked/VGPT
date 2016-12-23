<html>
<head>
  <title>VGPT</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{!! asset('jquery/jquery-3.0.0.min.js')!!}"></script>
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
</head>
<body>
  <div class="container" style="vertical-align: middle;display: table;">
      <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
      <div class="content">
        <div class="jumbotron" style="padding:25px;">
          <h1 style="text-align: center;">Leaderboard</h1>
        </div>
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr class="success">
              <th class="col-lg-2" style="text-align: center;">Adm No</th>
              <th class="col-lg-2" style="text-align: center;">Physics Score</th>
              <th class="col-lg-2" style="text-align: center;">Chemistry Score</th>
              <th class="col-lg-2" style="text-align: center;">Math Score</th>
              <th class="col-lg-2" style="text-align: center;">Total Score</th>
              <th class="col-lg-2" style="text-align: center;">Rank</th>
            </tr>
          </thead>
          <tbody>
            <?php $a = 0; ?>
            @foreach ($users as $key => $value)
              <tr class="info">
                <td style="text-align: center;"><a href="<?php echo "http://localhost:8080/Laravel/VGPT/public/api/v1/users/".$value->adm_no; ?>">{{ $value->adm_no }}</a></td>
                <td style="text-align: center;">{{ $value->phy_score }}</td>
                <td style="text-align: center;">{{ $value->chem_score }}</td>
                <td style="text-align: center;">{{ $value->math_score }}</td>
                <td style="text-align: center;">{{ $value->total_score }}</td>
                <td style="text-align: center;">{{ $value->rank }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      </div>
    </div>
  </div>
</body>
</html>
