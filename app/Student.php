<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email','adm_no','add','mothers_name','fathers_name','update_id'];
    public function user()
    {
      return $this->belongsTo('App\User','id');
    }
}
