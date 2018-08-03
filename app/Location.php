<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
	protected $table = "LOCATIONS";
    protected $fillable=['DESCRIPTION','ENCODING_TYPE','LOCATION','GEOM','NAME','GEN_FOI_ID','PROPERTIES'];
}
