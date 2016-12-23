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
                    <legend>Submit A New Material</legend>
                    <div class="form-group">
                        <label for='chapter' class="col-lg-2 control-label">Chapter</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Chapter" name="chapter">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='topic' class="col-lg-2 control-label">Topic</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-lg-2 control-label">File Type</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="file" name="file">
                              <option>PDF</option>
                              <option>JPG</option>
                              <option>TXT</option>
                              <option>DOC</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file" class="col-lg-2 control-label">Upload</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="file">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-primary" style="float: right;">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
