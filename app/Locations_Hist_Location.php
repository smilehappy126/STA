<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations_Hist_Location extends Model
{
	protected $table = "LOCATIONS_HIST_LOCATIONS";
    protected $fillable=['LOCATION_ID','HIST_LOCATION_ID'];
}
