<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['name', 'password','batch','time'];
    public function questions()
    {
        return $this->hasMany('App\Physicsquestion');
    }
    public function Cquestions()
    {
        return $this->hasMany('App\Chemistryquestion');
    }
    public function Mquestions()
    {
        return $this->hasMany('App\Mathquestion');
    }
    public function subjects()
    {
        return $this->hasMany('App\Subject');
    }
}
