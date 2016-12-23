<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Phyquestion1;
use App\Http\Requests;
use Response;
use Log;
use \Storage;
use Illuminate\Support\Facades\DB;
class PhyQuestions1Controller extends Controller
{
    public function index(){
      return view('physic.level1.question');
    }

    public function view(){
      Log::info('This is some useful information.');
      $questions = Phyquestion1::all();
      header("Access-Control-Allow-Origin: *");
      return Response::json([
        'questions'=> $questions
      ],200);
    }

    public function store(Request $request)
    {
      $pathA = "NULL";
      $pathB = "NULL";
      $pathC = "NULL";
      $pathD = "NULL";
      $pathQ = "NULL";
      if($request->hasFile('fileA')){
        $file = $request->file('fileA');
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        $pathA = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        if($uploaded){

        }
      }

      if($request->hasFile('fileB')){
        $file = $request->file('fileB');
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        $pathB = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        if($uploaded){

        }
      }
      if($request->hasFile('fileC')){
        $file = $request->file('fileC');
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        $pathC = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        if($uploaded){

        }
      }

      if($request->hasFile('fileD')){
        $file = $request->file('fileD');
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        $pathD = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        if($uploaded){

        }
      }

      if($request->hasFile('fileQ')){
        $file = $request->file('fileQ');
        $fileName = $file->getClientOriginalName();
        $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
        $pathQ = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
        if($uploaded){

        }
      }
      global $imp;
      if($request->get('imp')=="yes"){
        $imp = TRUE;
      }else{
        $imp= FALSE;
      }
      $question = new Phyquestion1(array(
        'type' => "Qusetion",
        'subject' => $request->get('subject'),
        'chapter' => "Chapter",
        'topic' => $request->get('topic'),
        'level' => $request->get('level'),
        'imp'=>$imp,
        'topic_id' => 1,
        'questions' => $request->get('questions'),
        'a' => $request->get('a'),
        'b' => $request->get('b'),
        'c' => $request->get('c'),
        'd' => $request->get('d'),
        'answer' => $request->get('answer'),
        'questionImageUrl' => $pathQ,
        'aImageUrl' => $pathA,
        'bImageUrl' => $pathB,
        'cImageUrl' => $pathC,
        'dImageUrl' => $pathD
      ));
      $question->save();
      return view('physic.level1.question');
    }
    public function show($prev)
    {
      $total = DB::table('phyquestions1')->count();
      $req = $total - $prev;
      $question = DB::table('phyquestions1')->take($req)->orderBy('id','desc')->get();
      return Response::json([
        'questions'=> $question
      ],200);
    }
}
