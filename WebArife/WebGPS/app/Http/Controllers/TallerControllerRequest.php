<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\ Taller;
use Illuminate\Support\Facades\Redirect;


use webGps\Http\Request\TallerFormRequest;
use DB;

class TallerControllerRequest extends Controller
{
     public function __construct(){
}
public function index(Request $request){
   if ($request) {
   $query=trim($request->get('searchText'));
   $taller=DB::table('taller')->where('UsrCrea','LIKE','%'.$query.'%')
  ->where('FlgEli','=','1')
  ->orderBy('IdOrden','desc')
  ->paginate(7);
  return view ('taller.index',["taller"=>$taller,"searchText"=>$query]);
}
}
public function create(){
return view("taller.create");
}
public function store(tablasFormRequest $request){
$taller=new Taller;
$taller->Descripcion=$request->get('Descripcion');
$taller->FchCrea=$request->get('FchCrea');
$taller->UsrCrea=$request->get('UsrCrea');
$taller->WksCrea=$request->get('WksCrea');
$taller->FchMod=$request->get('FchMod');
$taller->UsrMod=$request->get('UsrMod');
$taller->WksMod=$request->get('WksMod');
$taller>FlgEli=$request->get('FlgEli');


$Tablas->save;
return Redirect::to('Taller');
}
public function show($id){
return view("Taller.show", ["Taller"=>Taller::findOrFail($id)]);
}
public function edit($id){
return view("Taller.edit", ["Taller"=>Taller::findOrFail($id)]);
}
public function update(TallerFormRequest $request,$id){
$taller=taller::findOrFail($id);
$taller->Descripcion=$request->get('Descripcion');
$taller->FchCrea=$request->get('FchCrea');
$taller->UsrCrea=$request->get('UsrCrea');
$taller->WksCrea=$request->get('WksCrea');
$taller->FchMod=$request->get('FchMod');
$taller->UsrMod=$request->get('UsrMod');
$taller->WksMod=$request->get('WksMod');
$taller->FlgEli=$request->get('FlgEli');
$taller->update();
return Redirect::to('taller');
}
public function destroy($id){
$taller=taller::findOrFail($id);
$taller->FlgEli='0';
$taller->update();
return Redirect::to('taller');
}
}
