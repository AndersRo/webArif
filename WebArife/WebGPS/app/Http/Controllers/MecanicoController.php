<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
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
  $mecanico->IdMecanico=$request->get('IdMecanico');
  $mecanico->IdActor=$request->get('IdActor');
  $mecanico->FchCrea=Carbon::now();
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->get('WksCrea');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=Carbon::now();
  $mecanico->FlgEli=1;
  $mecanico->save();
  return Redirect::to('datos/mecanico');
}
public function show($id){
  return view("datos/mecanico.show", ["mecanico"=>Mecanico::findOrFail($id)]);
}
public function edit($id){
  return view("datos/mecanico.edit", ["mecanico"=>Mecanico::findOrFail($id)]);
}
public function update(MecanicoFormRequest $request,$id){
  $mecanico=Mecanico::findOrFail($id);
  $mecanico->IdMecanico=$request->get('IdMecanico');
  $mecanico->IdActor=$request->get('IdActor');
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->get('WksMod');
  $mecanico->FchMod=Carbon::now();
  $mecanico->FlgEli=1;
  $mecanico->update();
  return Redirect::to('datos/mecanico');
}
public function destroy($id){
  $mecanico=Mecanico::findOrFail($id);
  $mecanico->FlgEli='0';
  $mecanico->update();
  return Redirect::to('datos/mecanico');
 }
}
