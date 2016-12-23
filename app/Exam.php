<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
  protected $fillable = ['name','phy_score','chem_score','math_score','total_score','user_id','rank'];
  public function user()
  {
      return $this->belongsTo('App\User');
  }
  public function categorys()
    {
        return $this->belongsToMany('App\Category','exam_categories','exam_id','category_id');
    }
}
