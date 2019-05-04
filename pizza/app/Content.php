<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = ['name','voice','release','author','text','images','votes'];
}
