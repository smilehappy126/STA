<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hist_Locations extends Model
{
	protected $table = "HIST_LOCATIONS";
    protected $fillable=['TIME','THING_ID'];
}
