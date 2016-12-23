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

class RankController extends Controller
{
  public function today()
  {
    $users = TodayBoard::all()->sortByDesc('score')->values()->all();
    return View::make('today_rank')->with('users', $users);
  }
  public function week()
  {
    $users = WeekBoard::all()->sortByDesc('score')->values()->all();
    return View::make('week_rank')->with('users', $users);
  }
  public function month()
  {
    $users = MonthBoard::all()->sortByDesc('score')->values()->all();
    return View::make('month_rank')->with('users', $users);
  }
}
