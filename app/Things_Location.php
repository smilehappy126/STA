<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Things_Location extends Model
{
	protected $table = "THINGS_LOCATIONS";
    protected $fillable=['THING_ID','LOCATION_ID'];
}
