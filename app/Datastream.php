<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datastream extends Model
{
	protected $table = "DATASTREAMS";
    protected $fillable=['DESCRIPTION','OBSERVATION_TYPE','PHENOMENON_TIME_START','PHENOMENON_TIME_END','RESULT_TIME_START','RESULT_TIME_END','SENSOR_ID','OBS_PROPERTY_ID','THING_ID','UNIT_NAME','UNIT_SYMBOL','UNIT_DEFINITION','NAME','OBSERVED_AREA','PROPERTIES'];
}
