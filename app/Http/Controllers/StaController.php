<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datastream;
use App\Feature;
use App\Hist_Location;
use App\Location;
use App\Locations_Hist_Location;
use App\Multi_Datastream;
use App\Multi_Datastreams_Obs_Property;
use App\Obs_Property;
use App\Observation;
use App\Sensor;
use App\Thing;
use App\Things_Location;


class StaController extends Controller
{
	public function showAllDatastream(){
        $datastreams = Datastream::orderBy('ID','asc')
                                 ->get();


        return view("test",['datastreams' => $datastreams]);
    }
}