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
                        <legend>Register a new student</legend>
                        <div class="form-group">
                            <label for='adm_no' class="col-lg-2 control-label">Adm No</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="adm_no" placeholder="Adm No" name="adm_no">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='name' class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='class' class="col-lg-2 control-label">Class</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="class" placeholder="Class" name="class">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='course' class="col-lg-2 control-label">Course</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="course" placeholder="Course" name="course">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='fathers_name' class="col-lg-2 control-label">Father's Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="fathers_name" placeholder="Father's Name" name="fathers_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='mothers_name' class="col-lg-2 control-label">Mothers's Name</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="fathers_name" placeholder="Mothers's Name" name="mothers_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-lg-2 control-label">Address</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="address" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='email' class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file" class="col-lg-2 control-label">Upload Image</label>
                              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
    </div>
  </div>
</div>
</div>
</body>
</html>
