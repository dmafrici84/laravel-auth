<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationGuestController extends Controller
{
  public function index() {
    $locations = Location::all();
    return view('locations', compact('locations'));
  }
}
