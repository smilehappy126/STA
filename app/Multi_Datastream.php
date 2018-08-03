<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multi_Datastream extends Model
{
	protected $table = "MULTI_DATASTREAMS"; 
	protected $fillable=['NAME','DESCRIPTION','OBSERVATION_TYPE','PHENOMENON_TIME_START','PHENOMENON_TIME_END','RESULT_TIME_START','RESULT_TIME_END','SENSOR_ID','THING_ID','UNIT_OF_MEASUREMENTS','OBSERVED_AREA','PROPERTIES'];
}

