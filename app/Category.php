<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name'];

  public function exams()
  {
      return $this->belongsToMany('App\Exam','exam_categories','category_id','exam_id');
  }
}
