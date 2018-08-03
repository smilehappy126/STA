<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
	protected $table = "SENSORS";
    protected $fillable=['DESCRIPTION','ENCODING_TYPE','METADATA','NAME','PROPERTIES'];
}
