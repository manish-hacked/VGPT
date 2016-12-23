<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PhysicsController extends Controller
{
    public function select()
    {
      return view('physics');
    }
    public function view(Request $request)
    {
      $level = $request->get('Level');
      $type = $request->get('Type');
      return redirect('api/v1/phy'.'/'.$level[6].'/'.strtolower($type).'s');
    }
}
