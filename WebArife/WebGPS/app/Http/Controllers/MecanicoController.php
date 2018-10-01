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
    public function __construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $mecanico=DB::table('mecanico')->where('IdActor','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('IdMecanico','desc')
    ->paginate(7);
    return view ('datos/mecanico.index',["mecanico"=>$mecanico,"searchText"=>$query]);
  }
}
public function create(){
  return view("datos/mecanico.create");
}
public function store(MecanicoFormRequest $request){
  $mecanico=new mecanico;
  $mecanico->IdActor=$request->get('IdActor');
  $mecanico->FchCrea=$request->get('FchCrea');
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->get('WksCrea');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=$request->get('FchMod');
  $mecanico->FlgEli=$request->get('FlgEli');
  $mecanico->save();
  return Redirect::to('datos/mecanico');
}
public function show($id){
  return view("datos/mecanico.show", ["mecanico"=>mecanico::findOrFail($id)]);
}
public function edit($id){
  return view("datos/mecanico.edit", ["mecanico"=>mecanico::findOrFail($id)]);
}
public function update(MecanicoFormRequest $request,$id){
  $mecanico=mecanico::findOrFail($id);
  $mecanico->IdActor=$request->get('IdActor');
  $mecanico->FchCrea=$request->get('FchCrea');
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->get('WksCrea');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=$request->get('FchMod');
  $mecanico->FlgEli=$request->get('FlgEli');
  $mecanico->update();
  return Redirect::to('datos/mecanico');
}
public function destroy($id){
  $mecanico=mecanico::findOrFail($id);
  $mecanico->FlgEli='0';
  $mecanico->update();
  return Redirect::to('datos/mecanico');
 }
}
