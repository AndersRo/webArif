<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Taller;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\TallerFormRequest;
use DB;

class TallerController extends Controller
{
     public function __construct(){
}
public function index(Request $request){
   if ($request) {
     $query=trim($request->get('searchText'));
     $taller=DB::table('taller')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdTaller','desc')
    ->paginate(7);
    return view ('datos/taller.index',["taller"=>$taller,"searchText"=>$query]);
  }
}
public function create(){
  return view("datos/taller.create");
}
public function store(TallerFormRequest $request){
  $taller=new Taller;
  $taller->IdTaller=$request->get('IdTaller');
  $taller->Descripcion=$request->get('Descripcion');
  $taller->FchCrea=$request->get('FchCrea');
  $taller->UsrCrea=$request->get('UsrCrea');
  $taller->WksCrea=$request->get('WksCrea');
  $taller->FchMod=$request->get('FchMod');
  $taller->UsrMod=$request->get('UsrMod');
  $taller->WksMod=$request->get('WksMod');
  $taller->FlgEli=1;
  $taller->save();
  return Redirect::to('datos/taller');
}
public function show($id){
  return view("datos/taller.show", ["taller"=>Taller::findOrFail($id)]);
}
public function edit($id){
  return view("datos/taller.edit", ["taller"=>Taller::findOrFail($id)]);
}
public function update(TallerFormRequest $request,$id){
  $taller=Taller::findOrFail($id);
  $taller->IdTaller=$request->get('IdTaller');
  $taller->Descripcion=$request->get('Descripcion');
  $taller->FchCrea=$request->get('FchCrea');
  $taller->UsrCrea=$request->get('UsrCrea');
  $taller->WksCrea=$request->get('WksCrea');
  $taller->FchMod=$request->get('FchMod');
  $taller->UsrMod=$request->get('UsrMod');
  $taller->WksMod=$request->get('WksMod');
  $taller->FlgEli=$request->get('FlgEli');
  $taller->update();
  return Redirect::to('datos/taller');
}
public function destroy($id){
  $taller=taller::findOrFail($id);
  $taller->FlgEli='0';
  $taller->update();
  return Redirect::to('datos/taller');
}
}
