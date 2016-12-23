<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Response;
use \Storage;
use App\Phyvideo1;
class PhyVideos1Controller extends Controller
{
    public function index(){
      return view('physic.level1.videos');
    }
    public function view(){
      $videos = Phyvideo1::all();
      return Response::json([
        'videos'=> $videos
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
      $path = config('app.fileDestinationPath').'/'.$request->file('file')->getClientOriginalName();
      $video = new Phyvideo1(array(
        'type' =>$type,
        'title'=>$request->get('title'),
        'description' => $request->get('description'),
        'sourceType' => "Internet",
        'intranetLink' => $path,
        'internetLink' => $path,
        'subject' => $request->get('subject'),
        'topic' => $request->get('topic'),
        'topic_id' => 1
      ));
      $video->save();
      return view('physic.level1.videos');
    }
    public function show($prev)
    {
      $total = DB::table('phyvideos1')->count();
      $req = $total - $prev;
      $video = DB::table('phyvideos1')->take($req)->orderBy('id','desc')->get();
      return Response::json([
        'videos'=> $video
      ],200);
    }
}
