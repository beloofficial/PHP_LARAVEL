<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
	protected $table = 'guests';
    //
    protected $fillable = ['email','password'];
}
