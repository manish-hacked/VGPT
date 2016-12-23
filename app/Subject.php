<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject', 'test_id'];
    public function test()
    {
        return $this->belongsTo('App\Test');
    }
}
