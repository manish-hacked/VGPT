<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Physicsanswer extends Model
{
     protected $fillable = ['answer'];
     public function products()
      {
          return $this->belongsToMany('App\Physicsquestion','phy_qusetion_answers','phyquestion_id','answer_id');
      }
}
