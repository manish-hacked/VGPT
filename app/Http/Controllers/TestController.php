<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use \Storage;
use App\Answer;
use App\AnswerC;
use App\AnswerM;
use App\ Physicsquestion;
use App\ Chemistryquestion;
use App\ Mathquestion;
use App\Subject;
use App\Test;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class TestController extends Controller
{
  public function index()
  {
    return view('test');
  }
  public function store(Request $request)
  {
    $test= new Test(array(
      'name' =>$request->get('test_name'),
      'password' => $request->get('test_pass'),
      'batch'=>$request->get('batch'),
      'time'=>$request->get('time')*(60000)
    ));
    $test->save();
    $t_id = $test['id'];
    $no_phy = $request->P_no;
    $no_chem = $request->C_no;
    $no_math = $request->M_no;
    if($no_phy>0){
      $sub = new Subject(array(
          'subject'=>"Physics",
          'test_id'=>$t_id
      ));
      $sub->save();
    }
    if($no_chem>0){
      $sub = new Subject(array(
          'subject'=>"Chemistry",
          'test_id'=>$t_id
      ));
      $sub->save();
    }
    if($no_math>0){
      $sub = new Subject(array(
          'subject'=>"Math",
          'test_id'=>$t_id
      ));
      $sub->save();
    }
    $pq_files =[];
    $pa_files =[];
    $pb_files =[];
    $pc_files =[];
    $pd_files =[];
    $pq_files = $request->file('phyfileQ');
    $pa_files = $request->file('pfileA');
    $pb_files = $request->file('pfileB');
    $pc_files = $request->file('pfileC');
    $pd_files = $request->file('pfileD');
    $p_ques = [];
    $p_a = [];
    $p_b = [];
    $p_c = [];
    $p_d = [];
    for($i=0;$i<$no_phy;$i++){
      if($pq_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$pq_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($pq_files[$i]->getRealPath()));
      $p_ques[$i] = config('app.fileDestinationPath').'/'.$pq_files[$i]->getClientOriginalName();
      }else{
        $p_ques[$i] = "NULL";
      }
      if($pa_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$pa_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($pa_files[$i]->getRealPath()));
      $p_a[$i] = config('app.fileDestinationPath').'/'.$pa_files[$i]->getClientOriginalName();
      }else{
        $p_a[$i] = "NULL";
      }
      if($pb_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$pb_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($pb_files[$i]->getRealPath()));
      $p_b[$i] = config('app.fileDestinationPath').'/'.$pb_files[$i]->getClientOriginalName();
      }else{
        $p_b[$i] = "NULL";
      }
      if($pc_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$pc_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($pc_files[$i]->getRealPath()));
      $p_c[$i] = config('app.fileDestinationPath').'/'.$pc_files[$i]->getClientOriginalName();
      }else{
        $p_c[$i] = "NULL";
      }
      if($pd_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$pd_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($pd_files[$i]->getRealPath()));
      $p_d[$i] = config('app.fileDestinationPath').'/'.$pd_files[$i]->getClientOriginalName();
      }else{
        $p_d[$i] = "NULL";
      }
      $Pques= new Physicsquestion(array(
        'question' =>$request->get('phyques')[$i],
        'qImgUrl' =>$p_ques[$i],
        'a' =>$request->get('pa')[$i],
        'b' =>$request->get('pb')[$i],
        'c' =>$request->get('pc')[$i],
        'd' =>$request->get('pd')[$i],
        'subject' =>"Physics",
        'aImgUrl' =>$p_a[$i],
        'bImgUrl' =>$p_b[$i],
        'cImgUrl' =>$p_c[$i],
        'dImgUrl' =>$p_d[$i],
        'marks' =>$request->get('pmarks')[$i],
        'negativeMarks'=>$request->get('pnmarks')[$i]*(-1),
        'test_id' =>$t_id,
        'type'=>$request->get('phytype')[$i]
      ));
      $Pques->save();
      $q_id = $Pques['id'];
      $ans1 = "";
      for($j=0;$j<count($request->get('pans')[$i+1]);$j++){
        if($ans1!="")
        $ans1 = $ans1.','.$request->get('pans')[$i+1][$j];
        else
        $ans1 = $ans1.$request->get('pans')[$i+1][$j];
          $ans= new Answer(array(
          'answer' =>$request->get('pans')[$i+1][$j],
          'question_id'=>$q_id
        ));
        $ans->save();
      }
      DB::table('physicsquestions')->where('id', $q_id)->update(['answer' => $ans1]);
    }
    $cq_files =[];
    $ca_files =[];
    $cb_files =[];
    $cc_files =[];
    $cd_files =[];
    $cq_files = $request->file('chemfileQ');
    $ca_files = $request->file('cfileA');
    $cb_files = $request->file('cfileB');
    $cc_files = $request->file('cfileC');
    $cd_files = $request->file('cfileD');
    $c_ques = [];
    $c_a = [];
    $c_b = [];
    $c_c = [];
    $c_d = [];
    for($i=0;$i<$no_chem;$i++){
      if($cq_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$cq_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($cq_files[$i]->getRealPath()));
      $c_ques[$i] = config('app.fileDestinationPath').'/'.$cq_files[$i]->getClientOriginalName();
      }else{
        $c_ques[$i] = "NULL";
      }
      if($ca_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$ca_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($ca_files[$i]->getRealPath()));
      $c_a[$i] = config('app.fileDestinationPath').'/'.$ca_files[$i]->getClientOriginalName();
      }else{
        $c_a[$i] = "NULL";
      }
      if($cb_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$cb_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($cb_files[$i]->getRealPath()));
      $c_b[$i] = config('app.fileDestinationPath').'/'.$cb_files[$i]->getClientOriginalName();
      }else{
        $c_b[$i] = "NULL";
      }
      if($cc_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$cc_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($cc_files[$i]->getRealPath()));
      $c_c[$i] = config('app.fileDestinationPath').'/'.$cc_files[$i]->getClientOriginalName();
      }else{
        $c_c[$i] = "NULL";
      }
      if($cd_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$cd_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($cd_files[$i]->getRealPath()));
      $c_d[$i] = config('app.fileDestinationPath').'/'.$cd_files[$i]->getClientOriginalName();
      }else{
        $c_d[$i] = "NULL";
      }
      $Cques= new Chemistryquestion(array(
        'question' =>$request->get('chemques')[$i],
        'qImgUrl' =>$c_ques[$i],
        'a' =>$request->get('ca')[$i],
        'b' =>$request->get('cb')[$i],
        'c' =>$request->get('cc')[$i],
        'd' =>$request->get('cd')[$i],
        'subject' =>"Chemistry",
        'aImgUrl' =>$c_a[$i],
        'bImgUrl' =>$c_b[$i],
        'cImgUrl' =>$c_c[$i],
        'dImgUrl' =>$c_d[$i],
        'marks' =>$request->get('cmarks')[$i],
        'negativeMarks' =>$request->get('cnmarks')[$i]*(-1),
        'test_id' =>$t_id,
        'type'=>$request->get('chemtype')[$i]
      ));
      $Cques->save();
      $q_id = $Cques['id'];
      $ans1 = "";
      for($j=0;$j<count($request->get('cans')[$i+1]);$j++){
        if($ans1!="")
        $ans1 = $ans1.','.$request->get('cans')[$i+1][$j];
        else
        $ans1 = $ans1.$request->get('cans')[$i+1][$j];
          $ans= new AnswerC(array(
          'answer' =>$request->get('cans')[$i+1][$j],
          'question_id'=>$q_id
        ));
        $ans->save();
      }
      DB::table('chemistryquestions')->where('id', $q_id)->update(['answer' => $ans1]);
    }
    $mq_files =[];
    $ma_files =[];
    $mb_files =[];
    $mc_files =[];
    $md_files =[];
    $mq_files = $request->file('mathfileQ');
    $ma_files = $request->file('mfileA');
    $mb_files = $request->file('mfileB');
    $mc_files = $request->file('mfileC');
    $md_files = $request->file('mfileD');
    $m_ques = [];
    $m_a = [];
    $m_b = [];
    $m_c = [];
    $m_d = [];
    for($i=0;$i<$no_math;$i++){
      if($mq_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$mq_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($mq_files[$i]->getRealPath()));
      $m_ques[$i] = config('app.fileDestinationPath').'/'.$mq_files[$i]->getClientOriginalName();
      }else{
        $m_ques[$i] = "NULL";
      }
      if($ma_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$ma_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($ma_files[$i]->getRealPath()));
      $m_a[$i] = config('app.fileDestinationPath').'/'.$ma_files[$i]->getClientOriginalName();
      }else{
        $m_a[$i] = "NULL";
      }
      if($mb_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$mb_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($mb_files[$i]->getRealPath()));
      $m_b[$i] = config('app.fileDestinationPath').'/'.$mb_files[$i]->getClientOriginalName();
      }else{
        $m_b[$i] = "NULL";
      }
      if($mc_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$mc_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($mc_files[$i]->getRealPath()));
      $m_c[$i] = config('app.fileDestinationPath').'/'.$mc_files[$i]->getClientOriginalName();
      }else{
        $m_c[$i] = "NULL";
      }
      if($md_files[$i]){
      $destinationPath = config('app.fileDestinationPath').'/'.$md_files[$i]->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($md_files[$i]->getRealPath()));
      $m_d[$i] = config('app.fileDestinationPath').'/'.$md_files[$i]->getClientOriginalName();
      }else{
        $m_d[$i] = "NULL";
      }
      $Mques= new Mathquestion(array(
        'question' =>$request->get('mathques')[$i],
        'qImgUrl' =>$m_ques[$i],
        'a' =>$request->get('ma')[$i],
        'b' =>$request->get('mb')[$i],
        'c' =>$request->get('mc')[$i],
        'd' =>$request->get('md')[$i],
        'subject' =>"Math",
        'aImgUrl' =>$m_a[$i],
        'bImgUrl' =>$m_b[$i],
        'cImgUrl' =>$m_c[$i],
        'dImgUrl' =>$m_d[$i],
        'marks' =>$request->get('mmarks')[$i],
        'negativeMarks' =>$request->get('mnmarks')[$i]*(-1),
        'test_id' =>$t_id,
        'type'=>$request->get('mathtype')[$i]
      ));
      $Mques->save();
      $q_id = $Mques['id'];
      $ans1 = "";
      for($j=0;$j<count($request->get('mans')[$i+1]);$j++){
        if($ans1!="")
        $ans1 = $ans1.','.$request->get('mans')[$i+1][$j];
        else
        $ans1 = $ans1.$request->get('mans')[$i+1][$j];
          $ans= new AnswerM(array(
          'answer' =>$request->get('mans')[$i+1][$j],
          'question_id'=>$q_id
        ));
        $ans->save();
      }
      DB::table('mathquestions')->where('id', $q_id)->update(['answer' => $ans1]);
    }
    return view('test');
  }
  public function view(){
    $total = DB::table('tests')->count();
    $test = Test::find($total);
    $questions = Test::find($total)->questions;
    $Cquestions = Test::find($total)->Cquestions;
    $Mquestions = Test::find($total)->Mquestions;
    $subjects =  Test::find($total)->subjects;
    return Response::json([
      'id'=>$test['id'],
      'name'=>$test['name'],
      'password'=>$test['password'],
      'subjects'=>$subjects,
      'date'=>date("m Y", strtotime($test['created_at'])),
      'physics'=> $questions,
      'chemistry'=>$Cquestions,
      'math'=>$Mquestions
    ],200);
  }
  public function batch(Request $request)
  {
    $batch = $request->batch;
    $no = $request->no;
    $total = DB::table('tests')->where('batch',$batch)->count();
    $req = $total - $no;
    $dpp = DB::table('tests')->where('batch',$batch)->take($req)->orderBy('id','desc')->get();
    $tests = array();
    for ($i = 0; $i < $req; $i++)
    {
      $total = $dpp[$i]->id;
      $test = Test::find($total);
      $questions = Test::find($total)->questions;
      $Cquestions = Test::find($total)->Cquestions;
      $Mquestions = Test::find($total)->Mquestions;
      $subjects =  Test::find($total)->subjects;
      $array = [
        "name" => $test['name'],
        "password" => $test['password'],
        "time"=>$test['time'],
        "subjects" => $subjects,
        "date" => date("m Y", strtotime($test['created_at'])),
        "physics" =>  $questions,
        "chemistry" => $Cquestions,
        "math" => $Mquestions
      ];
      $tests[$i] = $array;
    }
    return $tests;
  }
}
