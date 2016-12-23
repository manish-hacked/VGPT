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
          <h1 style="text-align: center;">TESTS</h1>
        </div>
        <div class="table-responsive">
        <table class="table">
          <thead>
            <tr class="success">
              <th class="col-lg-4" style="text-align: center;">Name</th>
              <th class="col-lg-4" style="text-align: center;">Batch</th>
              <th class="col-lg-4" style="text-align: center;">Date</th>
            </tr>
          </thead>
          <tbody>
            <?php $a = 0; ?>
            @foreach ($tests as $key => $value)
              <tr class="info">
                <td style="text-align: center;"><a href="<?php echo "http://localhost:8080/Laravel/VGPT/public/api/v1/tests/".$value->name; ?>">{{ $value->name }}</td>
                <td style="text-align: center;">{{ $value->batch }}</a></td>
                <td style="text-align: center;">{{ $value->created_at }}</td>
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
