<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dpp extends Model
{
    protected $fillable = ['type', 'URL','subject','topic','chapter','description','IURL','batch'];
}
