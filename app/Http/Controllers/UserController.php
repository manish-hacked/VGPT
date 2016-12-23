<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Response;
use \Storage;
use App\TodayBoard;
use App\WeekBoard;
use View;
use App\MonthBoard;
use Illuminate\Support\Collection;
use App\Exam;
class UserController extends Controller
{
  public function view(){
    $users = User::all();
    return Response::json([
      'users'=> $users
    ],200);
  }
  public function store(Request $request){
    $adm_no = $request->adm_no;
    $today_score  = $request->today_score;
    $week_score = $request->week_score;
    $month_score = $request->month_score;
    DB::table('today_boards')->where('adm_no', $adm_no)->update(['score' => $today_score]);
    DB::table('week_boards')->where('adm_no', $adm_no)->update(['score' => $week_score]);
    DB::table('month_boards')->where('adm_no', $adm_no)->update(['score' => $month_score]);
    $t_users = TodayBoard::all()->sortByDesc('score')->values()->all();
    $w_users = WeekBoard::all()->sortByDesc('score')->values()->all();
    $m_users = MonthBoard::all()->sortByDesc('score')->values()->all();
    $r = (int)count($t_users);
    while($r--){
      $admno = $t_users[$r]['adm_no'];
      DB::table('users')->where('adm_no', $admno)->update(['todays_rank' => $r+1]);
    }
    $r = count($w_users);
    while($r--){
      $admno = $w_users[$r]['adm_no'];
      DB::table('users')->where('adm_no', $admno)->update(['week_rank'=> $r+1]);
    }
    $r = count($m_users);
    while($r--){
      $admno = $m_users[$r]['adm_no'];
      DB::table('users')->where('adm_no', $admno)->update(['month_rank' => $r+1]);
    }
    $user = User::all()->where('adm_no', $adm_no)->values()->first();
    $t_r = $user['todays_rank'];
    $w_r = $user['week_rank'];
    $m_r = $user['month_rank'];
    return Response::json([
      'Today_Rank'=> $t_r,
      'Week_Rank'=> $w_r,
      'Month_Rank'=> $m_r
    ],200);
  }
  public function index(){
    return view('user');
    /**$users = TodayBoard::all()->sortByDesc('score')->values()->all();
    return View::make('today_rank')->with('users', $users);**/
  }
  public function insert(Request $request)
  {
    $path = "NULL";
    if($request->hasFile('file')){
      $file = $request->file('file');
      $fileName = $file->getClientOriginalName();
      $destinationPath = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
      $uploaded = Storage::put($destinationPath, file_get_contents($file->getRealPath()));
      $path = config('app.fileDestinationPath').'/'.$file->getClientOriginalName();
      if($uploaded){

      }
    }
    $adm_no = $request->get('adm_no');
    $user = new User(array(
      'adm_no' =>$adm_no,
      'name' => $request->get('name'),
      'class' => $request->get('class'),
      'intranetURL' => $path,
      'internetURL' => $path,
      'course' => $request->get('course'),
      'fathers_name' => $request->get('fathers_name'),
      'mothers_name' => $request->get('mothers_name'),
      'address'=>$request->get('address'),
      'email'=>$request->get('email')
    ));
    $user->save();
    $today_board = new TodayBoard(array(
      'adm_no' =>$adm_no
    ));
    $today_board->save();
    $week_board = new WeekBoard(array(
      'adm_no' =>$adm_no
    ));
    $week_board->save();
    $month_board = new MonthBoard(array(
      'adm_no' =>$adm_no
    ));
    $month_board->save();
    return view('user');
  }
  public function show($adm_no)
  {
    $users = User::all()->where('adm_no',$adm_no)->first();
    $user_id = $users->id;
    $tests = User::find($user_id)->exams;
    return View::make('student')->with('users', $users)->with('tests', $tests);
  }
  public function rank(Request $request)
  {
    $type = $request->get('type');
    $high = $request->get('high');
    $low  = $request->get('low')-1;
    if($type=="today"){
      $t_users = TodayBoard::all()->sortByDesc('score')->values()->all();
      $count = count($t_users);
      $names = [];
      $p=0;
      for($i=$low;($i<$high&&$i<$count);$i++){
        $adm_no = $t_users[$i]['adm_no'];
        $user = User::all()->where('adm_no', $adm_no)->values()->first();
        $names[$p] = $user['name']; 
        $p++;
      }
      return Response::json([
        'names'=> $names
      ],200);
    }else if($type=="week"){
      $w_users = WeekBoard::all()->sortByDesc('score')->values()->all();
      $count = count($w_users);
      $names = [];
      $p=0;
      for($i=$low;($i<$high&&$i<$count);$i++){
        $adm_no = $w_users[$i]['adm_no'];
        $user = User::all()->where('adm_no', $adm_no)->values()->first();
        $names[$p] = $user['name']; 
        $p++;
      }
      return Response::json([
        'names'=> $names
      ],200);
    }else if($type=="month"){
      $m_users = MonthBoard::all()->sortByDesc('score')->values()->all();
      $count = count($m_users);
      $names = [];
      $p=0;
      for($i=$low;($i<$high&&$i<$count);$i++){
        $adm_no = $m_users[$i]['adm_no'];
        $user = User::all()->where('adm_no', $adm_no)->values()->first();
        $names[$p] = $user['name']; 
        $p++;
      }
      return Response::json([
        'names'=> $names
      ],200);
    }else{
      return Response::json([
        'error'=> "Invalid Type"
      ],404);
    }
  }
}
