<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
	protected $table = "FEATURES";
    protected $fillable=['DESCRIPTION','ENCODING_TYPE','FEATURE','GEOM','NAME','PROPERTIES'];
}
