<html>
<head>
  <title>VGPT</title>
  <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
  <script src="{!! asset('jquery/jquery-3.0.0.min.js')!!}"></script>
  <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
  <script>
      var phy_ques;
      var chem_ques;
      var math_ques;
      function phy_ques_save(no){
        phy_ques = no;
      }
      function chem_ques_save(no){
        chem_ques = no;
      }
      function math_ques_save(no){
        math_ques = no;
      }
      function appendText() {
        $("#hello").hide();
        $("#P1").hide();
        $("#P2").hide();
        $("#P3").hide();
        if(phy_ques>0)
        $("fieldset").append('<h1 class="cenetr" style="text-align:center;">'+"Physics"+ '</h1>' );
        for(var i=1;i<=phy_ques;i++){
            $("fieldset").append('<h5 class="cenetr">'+"Question" +' '+ i +  '</h5>' );
            $("fieldset").append('<div class="form-group">'+'<label for="type" class="col-lg-2 control-label">'+ "Type"+'</label>'+'<div class="col-lg-5">'+'<select class="form-control selcls" id="type" name="phytype[]">'+'<option>'+"SINGLE"+'</option>'+'<option>'+"MULTIPLE"+'</option>'+'<option>'+"INTEGER"+'</option>'+'</select>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="question" class="col-lg-2 control-label">'+"Question"+'</label>'+'<div class="col-lg-10">'+'<textarea class="form-control" rows="3" id="question" name="phyques[]">'+'</textarea>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileQ" class="col-lg-2 control-label">'+"Question Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="phyfileQ[]" multiple>'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionA" class="col-lg-2 control-label">'+"Option A:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionA" placeholder="Option A" name="pa[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileA" class="col-lg-2 control-label">'+"A Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="pfileA[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionB" class="col-lg-2 control-label">'+"Option B:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionB" placeholder="Option B" name="pb[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileB" class="col-lg-2 control-label">'+"B Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="pfileB[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionC" class="col-lg-2 control-label">'+"Option C:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionC" placeholder="Option C" name="pc[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileC" class="col-lg-2 control-label">'+"C Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="pfileC[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionD" class="col-lg-2 control-label">'+"Option D:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionD" placeholder="Option D" name="pd[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileD" class="col-lg-2 control-label">'+"D Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="pfileD[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="answer" class="col-lg-2 control-label">'+"Answer"+'</label>'+'<div class="col-lg-10">'+'<label class="checkbox-inline">'+'<input type="checkbox" value="A" name="pans['+i+'][]">'+"A"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="B" name="pans['+i+'][]">'+"B"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="C" name="pans['+i+'][]">'+"C"+'</label>'+'<label class="checkbox-inline">'
            + '<input type="checkbox" value="D" name="pans['+i+'][]">'+"D"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="0" name="pans['+i+'][]">'+"0"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="1" name="pans['+i+'][]">'+"1"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="2" name="pans['+i+'][]">'+"2"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="3" name="pans['+i+'][]">'+"3"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="4" name="pans['+i+'][]">'+"4"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="5" name="pans['+i+'][]">'+"5"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="6" name="pans['+i+'][]">'+"6"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="7" name="pans['+i+'][]">'+"7"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="8" name="pans['+i+'][]">'+"8"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="9" name="pans['+i+'][]">'+"9"+'</label>');
            $("fieldset").append('<div class="form-group">'+'<label for="marks" class="col-lg-2 control-label">'+"Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="marks" placeholder="marks" name="pmarks[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="nmarks" class="col-lg-2 control-label">'+"Negative Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="nmarks" placeholder="Negative Marks" name="pnmarks[]">'+'</div>'+'</div>');
        }
        if(chem_ques>0)
        $("fieldset").append('<h1 class="cenetr" style="text-align:center;">'+"Chemistry"+ '</h1>' );
        for(var i=1;i<=chem_ques;i++){
            $("fieldset").append('<h5 class="cenetr">'+"Question" +' '+ i +  '</h5>' );
            $("fieldset").append('<div class="form-group">'+'<label for="type" class="col-lg-2 control-label">'+ "Type"+'</label>'+'<div class="col-lg-5">'+'<select class="form-control selcls" id="type" name="chemtype[]">'+'<option>'+"SINGLE"+'</option>'+'<option>'+"MULTIPLE"+'</option>'+'<option>'+"INTEGER"+'</option>'+'</select>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="question" class="col-lg-2 control-label">'+"Question"+'</label>'+'<div class="col-lg-10">'+'<textarea class="form-control" rows="3" id="question" name="chemques[]">'+'</textarea>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileQ" class="col-lg-2 control-label">'+"Question Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="chemfileQ[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionA" class="col-lg-2 control-label">'+"Option A:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionA" placeholder="Option A" name="ca[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileA" class="col-lg-2 control-label">'+"A Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="cfileA[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionB" class="col-lg-2 control-label">'+"Option B:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionB" placeholder="Option B" name="cb[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileB" class="col-lg-2 control-label">'+"B Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="cfileB[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionC" class="col-lg-2 control-label">'+"Option C:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionC" placeholder="Option C" name="cc[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileC" class="col-lg-2 control-label">'+"C Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="cfileC[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionD" class="col-lg-2 control-label">'+"Option D:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionD" placeholder="Option D" name="cd[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileD" class="col-lg-2 control-label">'+"D Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="cfileD[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="answer" class="col-lg-2 control-label">'+"Answer"+'</label>'+'<div class="col-lg-10">'+'<label class="checkbox-inline">'+'<input type="checkbox" value="A" name="cans['+i+'][]">'+"A"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="B" name="cans['+i+'][]">'+"B"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="C" name="cans['+i+'][]">'+"C"+'</label>'+'<label class="checkbox-inline">'
            + '<input type="checkbox" value="D" name="cans['+i+'][]">'+"D"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="0" name="cans['+i+'][]">'+"0"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="1" name="cans['+i+'][]">'+"1"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="2" name="cans['+i+'][]">'+"2"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="3" name="cans['+i+'][]">'+"3"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="4" name="cans['+i+'][]">'+"4"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="5" name="cans['+i+'][]">'+"5"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="6" name="cans['+i+'][]">'+"6"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="7" name="cans['+i+'][]">'+"7"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="8" name="cans['+i+'][]">'+"8"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="9" name="cans['+i+'][]">'+"9"+'</label>');
            $("fieldset").append('<div class="form-group">'+'<label for="marks" class="col-lg-2 control-label">'+"Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="marks" placeholder="marks" name="cmarks[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="nmarks" class="col-lg-2 control-label">'+"Negative Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="nmarks" placeholder="Negative Marks" name="cnmarks[]">'+'</div>'+'</div>');
        }
        if(math_ques>0)
        $("fieldset").append('<h1 class="cenetr" style="text-align:center;">'+"Math"+ '</h1>' );
        for(var i=1;i<=math_ques;i++){
            $("fieldset").append('<h5 class="cenetr">'+"Question" +' '+ i +  '</h5>' );
            $("fieldset").append('<div class="form-group">'+'<label for="type" class="col-lg-2 control-label">'+ "Type"+'</label>'+'<div class="col-lg-5">'+'<select class="form-control selcls" id="type" name="mathtype[]">'+'<option>'+"SINGLE"+'</option>'+'<option>'+"MULTIPLE"+'</option>'+'<option>'+"INTEGER"+'</option>'+'</select>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="question" class="col-lg-2 control-label">'+"Question"+'</label>'+'<div class="col-lg-10">'+'<textarea class="form-control" rows="3" id="question" name="mathques[]">'+'</textarea>'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileQ" class="col-lg-2 control-label">'+"Question Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="mathfileQ[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionA" class="col-lg-2 control-label">'+"Option A:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionA" placeholder="Option A" name="ma[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileA" class="col-lg-2 control-label">'+"A Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="mfileA[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionB" class="col-lg-2 control-label">'+"Option B:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionB" placeholder="Option B" name="mb[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileB" class="col-lg-2 control-label">'+"B Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="mfileB[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionC" class="col-lg-2 control-label">'+"Option C:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionC" placeholder="Option C" name="mc[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileC" class="col-lg-2 control-label">'+"C Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="mfileC[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="optionD" class="col-lg-2 control-label">'+"Option D:"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="optionD" placeholder="Option D" name="md[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="fileD" class="col-lg-2 control-label">'+"D Image Url"+'</label>'+'<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="mfileD[]">'+'</div>');
            $("fieldset").append('<div class="form-group">'+'<label for="answer" class="col-lg-2 control-label">'+"Answer"+'</label>'+'<div class="col-lg-10">'+'<label class="checkbox-inline">'+'<input type="checkbox" value="A" name="mans['+i+'][]">'+"A"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="B" name="mans['+i+'][]">'+"B"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="C" name="mans['+i+'][]">'+"C"+'</label>'+'<label class="checkbox-inline">'
            + '<input type="checkbox" value="D" name="mans['+i+'][]">'+"D"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="0" name="mans['+i+'][]">'+"0"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="1" name="mans['+i+'][]">'+"1"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="2" name="mans['+i+'][]">'+"2"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="3" name="mans['+i+'][]">'+"3"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="4" name="mans['+i+'][]">'+"4"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="5" name="mans['+i+'][]">'+"5"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="6" name="mans['+i+'][]">'+"6"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="7" name="mans['+i+'][]">'+"7"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="8" name="mans['+i+'][]">'+"8"+'</label>'+'<label class="checkbox-inline">'+'<input type="checkbox" value="9" name="mans['+i+'][]">'+"9"+'</label>');
            $("fieldset").append('<div class="form-group">'+'<label for="marks" class="col-lg-2 control-label">'+"Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="marks" placeholder="marks" name="mmarks[]">'+'</div>'+'</div>'+'<div class="form-group">'+'<label for="nmarks" class="col-lg-2 control-label">'+"Negative Marks"+'</label>'+'<div class="col-lg-10">'+'<input type="text" class="form-control" id="nmarks" placeholder="Negative Marks" name="mnmarks[]">'+'</div>'+'</div>');
        }
        $("fieldset").append('<div class="form-group">'+'<div class="col-lg-10 col-lg-offset-2">'+'<button type="submit" style="float:right;" class="btn btn-primary">'+"Submit"+'</button>'+'</div>'+'</div>');
      }
  </script>
</head>
<body>
<div class="container" style="vertical-align: middle; padding:50px;display: table;">
    <div class="vertical-center-row" style="display: table-cell;vertical-align: middle;">
    <div class="content">
      <div class="well well bs-component">
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                  <fieldset>
                    <div class="form-group">
                        <label for='topic' class="col-lg-3 control-label">Batch</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="topic" placeholder="Topic" name="batch">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for='test_name' class="col-lg-3 control-label">Test Name</label>
                        <div class="col-lg-9">
                            <input type="text" class="form-control" id="test_name" placeholder="Name" name="test_name">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for='test_pass' class="col-lg-3 control-label">Password</label>
                      <div class="col-lg-9">
                            <input type="text" class="form-control" id="test_pass" placeholder="Password" name="test_pass">
                        </div>
                    </div>
                    <div class="form-group">
                      <label for='test_time' class="col-lg-3 control-label">Time</label>
                      <div class="col-lg-9">
                            <input type="text" class="form-control" id="test_pass" placeholder="Time" name="time">
                        </div>
                    </div>
                    <div class="form-group" id="P1">
                        <label for='P_no' class="col-lg-3 control-label">No Of Question In Physics</label>
                        <div class="col-lg-9">
                            <input type="number" onchange="phy_ques_save(this.value)" class="form-control" id="P_no" placeholder="" name="P_no">
                        </div>
                    </div>
                    <div class="form-group" id="P2">
                        <label for='C_no' class="col-lg-3 control-label">No Of Question In Chemistry</label>
                        <div class="col-lg-9">
                            <input type="number" onchange="chem_ques_save(this.value)" class="form-control" id="C_no" placeholder="" name="C_no">
                        </div>
                    </div>
                    <div class="form-group" id="P3">
                        <label for='M_no' class="col-lg-3 control-label">No Of Question In Math</label>
                        <div class="col-lg-9">
                            <input type="number" class="form-control" onchange="math_ques_save(this.value)" id="M_no" placeholder="" name="M_no">
                        </div>
                    </div>
                    <button type="button" class="btn btn-info btn-lg" style="float:right;" onclick="appendText()" id="hello">Button</button>
                  </fieldset>
              </form>
          </div>
    </div>
  </div>
</div>
</body>
