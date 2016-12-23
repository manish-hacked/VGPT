<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerM extends Model
{
  protected $fillable = ['answer','question_id'];
  public function test()
  {
      return $this->belongsTo('App\Mathquestion');
  }
}
