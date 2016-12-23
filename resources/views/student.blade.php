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
  <div class="container" style="vertical-align: middle; padding:50px;display: table;">
      <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
      <div class="content">
    <div class="well well bs-component">
                <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/Laravel/VGPT/public/api/v1/users/insert">
                  @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                  @endforeach
                  @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <fieldset>
                        <legend style="text-align:center">Student Profile</legend>
                        <div class="form-group">
                          <img src="<?php echo "http://localhost:8080/Laravel/VGPT/resources/".$users->internetURL ?>" class="img-responsive" alt="<?php echo $users->internetURL ?>" style="margin-right:20px" align="right" height="200px" width="200px">
                        </div>
                        <div class="form-group">
                            <label for='adm_no' class="col-lg-2 control-label">Adm No</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="adm_no" style="margin-top:0px;">{{ $users->adm_no }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='name' class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="name" style="margin-top:0px;">{{ $users->name }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='class' class="col-lg-2 control-label">Class</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="class" style="margin-top:0px;">{{ $users->class }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='course' class="col-lg-2 control-label">Course</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="course" style="margin-top:0px;">{{ $users->course }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='fathers_name' class="col-lg-2 control-label">Father's Name</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="fathers_name" style="margin-top:0px;">{{ $users->fathers_name}}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='mothers_name' class="col-lg-2 control-label">Mothers's Name</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="mothers_name" style="margin-top:0px;">{{ $users->mothers_name }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='address' class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                                <h4 id="address" name="address" style="margin-top:0px;">{{ $users->address }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='t_rank' class="col-lg-2 control-label">Today Rank</label>
                            <div class="col-lg-10">
                                <h4 id="t_rank" name="t_rank" style="margin-top:0px;">{{ $users->todays_rank }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='w_rank' class="col-lg-2 control-label">Month Rank</label>
                            <div class="col-lg-10">
                                <h4 id="w_rank" name="w_rank" style="margin-top:0px;">{{ $users->month_rank }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='m_rank' class="col-lg-2 control-label">Week Rank</label>
                            <div class="col-lg-10">
                                <h4 id="m_rank" name="m_rank" style="margin-top:0px;">{{ $users->week_rank }}</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='email' class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <h4 id="adm_no" name="email" style="margin-top:0px;">{{ $users->email }}</h4>
                            </div>
                        </div>
                    </fieldset>
                </form>
    </div>
    <div class="container" style="vertical-align: middle;display: table;">
        <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
        <div class="content">
          <div class="jumbotron" style="padding:25px;">
            <h1 style="text-align: center;">PERFOMANCE IN TESTS</h1>
          </div>
          <div class="table-responsive">
          <table class="table">
            <thead>
              <tr class="success">
                <th class="col-lg-2" style="text-align: center;">Test Name</th>
                <th class="col-lg-2" style="text-align: center;">Physics Score</th>
                <th class="col-lg-2" style="text-align: center;">Chemistry Score</th>
                <th class="col-lg-2" style="text-align: center;">Math Score</th>
                <th class="col-lg-2" style="text-align: center;">Total Score</th>
                <th class="col-lg-2" style="text-align: center;">Position</th>
              </tr>
            </thead>
            <tbody>
              <?php $a = 0; ?>
              @foreach ($tests as $key => $value)
                <tr class="info">
                  <td style="text-align: center;"><a href="<?php echo "http://localhost:8080/Laravel/VGPT/public/api/v1/tests/".$value->name; ?>">{{ $value->name }}</td>
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
  </div>
</div>
</div>
</body>
</html>
