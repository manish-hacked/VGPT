@extends('master')
@section('title','Math')
@section('content')
<div class="container">
  <div class="content">
    <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                <fieldset>
                    <div class="form-group">
                        <label for="level" class="col-lg-2 control-label">Level</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="level" name="Level">
                              <option>Level 1</option>
                              <option>Level 2</option>
                              <option>Level 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-lg-2 control-label">Type</label>
                        <div class="col-lg-5">
                            <select class="form-control selcls" id="type" name="Type">
                              <option>Question</option>
                              <option>Material</option>
                              <option>Video</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
  </div>
</div>
@endsection
