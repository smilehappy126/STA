<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multi_Datastreams_Obs_Property extends Model
{
	protected $table = "MULTI_DATASTREAMS_OBS_PROPERTIES"; 
	protected $fillable=['MULTI_DATASTREAM_ID','OBS_PROPERTY_ID','RANK'];
}

