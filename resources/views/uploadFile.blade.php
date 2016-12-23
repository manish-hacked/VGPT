
<html>
 <body>
    <h2>Uploads Files Here</h2>
    {!! Form::open(array('url'=>'localhost:8080/Laravel/VGPT/public/uploadFile','files'=>true))!!}
      {!!Form::file('image')!!}
      {!!Form::token()!!}
      {!!Form::submit('upload')!!}
    {!!Form::close()!!}
 </body>
</html>
