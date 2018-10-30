<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ExcelController extends Controller
{
    public function index(Request $request){
      $mecanico=DB:table('mecanico')->get();
      
    }
}
