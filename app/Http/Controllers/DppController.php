<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Response;
use \Storage;
use App\Dpp;

class DppController extends Controller
{
  public function index()
  {
    return view('dpp');
  }
  public function view(){
    $dpps = Dpp::all();
    return Response::json([
      'dpps'=> $dpps
    ],200);
  }
  public function store(Request $request)
  {
    $path = "NULL";
    $type = "NULL";
    if($request->hasFile('file')){
      $file = $request->file('file');
      $fileName = $file->getClientOriginalName();
      $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
      if($uploaded){
          $path = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
          $type = $file->getClientOriginalExtension();
      }
    }
    $dpp = new Dpp(array(
      'type' =>$type,
      'description' => $request->get('description'),
      'URL' => $path,
      'IURL' => $path,
      'subject' => $request->get('subject'),
      'chapter' => $request->get('chapter'),
      'topic' => $request->get('topic'),
      'batch'=>$request->get('batch')
    ));
    $dpp->save();
    return view('dpp');
  }
  public function show($prev)
  {
    $total = DB::table('dpps')->count();
    $req = $total - $prev;
    $dpp = DB::table('dpps')->take($req)->orderBy('id','desc')->get();
    return Response::json([
      'dpps'=> $dpp
    ],200);
  }
  public function batch(Request $request)
  {
    $batch = $request->batch;
    $no = $request->no;
    error_log(print_r($_POST, true));
    $total = DB::table('dpps')->where('batch',$batch)->count();
    $req = $total - $no;
    $dpp = DB::table('dpps')->where('batch',$batch)->take($req)->orderBy('id','desc')->get();
    return Response::json([
      'dpps'=> $dpp
    ],200);
  }
}
