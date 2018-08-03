<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thing extends Model
{
	protected $table = "THINGS";
    protected $fillable=['DESCRIPTION','PROPERTIES','NAME'];
}
