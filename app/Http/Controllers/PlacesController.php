<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class PlacesController extends Controller
{
    public function list(){
      $places = Place::all();
      return view ('places', compact('places'));
    }
}
