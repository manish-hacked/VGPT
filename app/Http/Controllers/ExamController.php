<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use \Storage;
use App\User;
use App\Exam;
use App\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class ExamController extends Controller
{
    public function entry(Request $request)
    {
      $adm_no = $request->adm_no;
      $test_name = $request->test_name;
      $p_score = $request->physics_score;
      $c_score = $request->chemistry_score;
      $m_score = $request->math_score;
      $total = $request->total;
      $user = User::all()->where('adm_no',$adm_no)->first();
      $user_id  = $user->id;

      $exam = new Exam(array(
          'name'=>$test_name,
          'phy_score'=>$p_score,
          'math_score'=>$m_score,
          'chem_score'=>$c_score,
          'total_score'=>$total,
          'user_id'=>$user_id
      ));
      $exam->save();
      $t_users = Exam::all()->where('name',$test_name)->sortByDesc('total_score')->values()->all();
      $r = (int)count($t_users);
      while($r--){
        $u_id = $t_users[$r]['user_id'];
        DB::table('exams')->where('user_id', $u_id)->where('name', $test_name)->update(['rank' => $r+1]);
      }
    }
}
