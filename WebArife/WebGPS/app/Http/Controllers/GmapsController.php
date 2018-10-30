<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Controllers\GmapsController;
use GeneaLabs\Providers\Service;

class GmapsController extends Controller
{

  public function index()
{
  
    //configuración
    return view('Gmaps.index');
}

}
