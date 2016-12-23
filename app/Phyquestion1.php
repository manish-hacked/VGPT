<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phyquestion1 extends Model
{
    protected $table = 'phyquestions1';
    protected $fillable = ['type', 'subject','chapter','topic','level','topic_id','questions','imp','a','b','c','d','answer','questionImageUrl','aImageUrl','bImageUrl','cImageUrl','dImageUrl'];
}
