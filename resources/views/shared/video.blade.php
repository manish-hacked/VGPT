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
                    <legend>Submit A New Video</legend>
                    <div class="form-group">
                        <label for="level" class="col-lg-2 control-label">Subject</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="level" name="subject">
                              <option>PHYSICS</option>
                              <option>CHEMISTRY</option>
                              <option>MATH</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='topic' class="col-lg-2 control-label">Topic</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='title' class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
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
