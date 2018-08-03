<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obs_Property extends Model
{
	protected $table = "OBS_PROPERTIES";
    protected $fillable=['NAME','DEFINITION','DESCRIPTION','PROPERTIES'];
}
