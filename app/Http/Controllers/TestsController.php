<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use \Storage;
use App\User;
use App\Exam;
use App\Test;
use App\Category;
use View;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
class TestsController extends Controller
{
  public function index()
  {
    $tests = Test::all()->sortByDesc('id');
    return View::make('tests')->with('tests', $tests);
  }
  public function show($name)
  {
    $users = Exam::all()->where('name',$name)->sortByDesc('total_score')->values()->all();
    $r = (int)count($users);
    while($r--){
      $id = $users[$r]['user_id'];
      $user = User::all()->where('id',$id)->first();
      $users[$r]['adm_no'] = $user['adm_no'];
    }
    return View::make('students')->with('users', $users);
  }
}
