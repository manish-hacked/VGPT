<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Storage;
use App\Http\Requests;
class UploadFileController extends Controller
{
      public function index(){
      return view('uploadFile');
      }
      public function showUploadFile(Request $request){
        if($request->hasFile('image')){
          $file = $request->file('image');
          $fileName = $file->getClientOriginalName();
          $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
          $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
          if($uploaded){

          }
        }
        $path = config('app.fileDestinationPath').'/'.$request->file('image')->getClientOriginalName();
      return $path;

      //$file->move($destinationPath,$file->getClientOriginalName());
      }
}