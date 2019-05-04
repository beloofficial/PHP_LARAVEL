<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $table = 'comments'; 
    protected $fillable = ['name','text','anime_id'];
}
