<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\Mecanico;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\MecanicoFormRequest;
use DB;

class MecanicoController extends Controller
{
    public function__construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $marca=DB::table('mecanico')->where('idActor','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('idMecanico','desc')
    ->paginate(7);
    return view ('mecanico.index',["mecanico"=>$mecanico,"searchText"=>$query]);
  }
}
public function create(){
  return view("mecanico.create");
}
public function store(MecanicoFormRequest $request){

  $modelo=new mecanico;
  $mecanico->idActor=$request->get('idActor');
  $mecanico->FchCrea=$request->get('FchCrea');
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->get('WksCrea');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=$request=>get('FchMod');
  $mecanico->FlgEli=$request->get('FlgEli')

  return Redirect::to('mecanico');
}
public function show($id){
  return view("mecanico.show", ["mecanico"=>"mecanico"::findOrFail($id)]);
}
public function edit($id){
  return view("mecanico.edit", ["mecanico"=>mecanico::findOrFaimecanico
public function update(modeloFormRequest $request,$id){
  $mecanico->idActor=$request->get('idActor');
  $mecanico->FchCrea=$request->get('FchCrea');
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->get('WksCrea');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=$request=>get('FchMod');
  $mecanico->FlgEli=$request->get('FlgEli')
  $mecanico->update();
  return Redirect::to('mecanico');
public function destroy($id){
$mecanico=mecanico::findOrFail($id);
$mecanico->FlgEli='0';
$mecanico->update();
return Redirect::to('mecanico');
 }
}
