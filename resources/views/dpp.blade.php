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
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
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
                        <legend>Submit A New Dpp</legend>
                        <div class="form-group">
                            <label for='subject' class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='chapter' class="col-lg-2 control-label">Chapter</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="chapter" placeholder="Chapter" name="chapter">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='topic' class="col-lg-2 control-label">Topic</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='topic' class="col-lg-2 control-label">Batch</label>
                            <div class="col-lg-10">
                                <input type="text" class="form-control" id="topic" placeholder="Topic" name="batch">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" rows="3" id="description" name="description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="file" class="col-lg-2 control-label">Upload</label>
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
