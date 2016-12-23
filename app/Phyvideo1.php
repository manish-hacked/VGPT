<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phyvideo1 extends Model
{
    protected $table = 'phyvideos1';
    protected $fillable = ['type','title','description','sourceType','intranetLink','internetLink','subject','chapter','topic','topic_id'];
}
