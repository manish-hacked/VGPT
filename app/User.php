<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adm_no','name','class','address','course','fathers_name','mothers_name','todays_rank','week_rank','month_rank','email','internetURL','intranetURL'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function exams(){
      return $this->hasMany('App\Exam');
    }
}
