<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mathquestion extends Model
{
  protected $fillable = ['question', 'qImgUrl','a','b','c','d','subject','aImgUrl','bImgUrl','cImgUrl','dImgUrl','marks','negativeMarks','test_id','type','answer'];
  public function test()
  {
      return $this->belongsTo('App\Test');
  }
  public function answers()
  {
      return $this->hasMany('App\AnswerM');
  }
}
