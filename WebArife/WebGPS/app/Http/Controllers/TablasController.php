<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use webGps\Http\Requests;
use webGps\Tablas;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\TablasFormRequest;
use DB;

class TablasController extends Controller
{
     	public function __construct(){
}
  public function index(Request $request){
     if ($request) {
     $query=trim($request->get('searchText'));
     $tablas=DB::table('tablas')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','0')
    ->orderBy('IdTabla','desc')
    ->paginate(7);
    return view ('tablas/tablas.index',["tablas"=>$tablas,"searchText"=>$query]);
  }
}
public function create(){
  return view("tablas/tablas.create");
}
public function store(TablasFormRequest $request){
  $tablas=new Tablas;
  $tablas->IdTabla=$request->get('IdTabla');
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchCrea=Carbon::now();
  $tablas->UsrCrea=$request->get('UsrCrea');
  $tablas->WksCrea=$request->get('WksCrea');
  $tablas->FchMod=Carbon::now();
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=0;
  $tablas->save();
  return Redirect::to('tablas/tablas');
}
public function show($id){
  return view("tablas/tablas.show", ["tablas"=>Tablas::findOrFail($id)]);
}
public function edit($id){
  return view("tablas/tablas.edit", ["tablas"=>Tablas::findOrFail($id)]);
}
public function update(TablasFormRequest $request,$id){
  $tablas=Tablas::findOrFail($id);
  $tablas->IdTabla=$request->get('IdTabla');
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchMod=Carbon::now();
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=0;
  $tablas->update();
  return Redirect::to('tablas/tablas');
}
public function destroy($id){
  $tablas=Tablas::findOrFail($id);
  $tablas->FlgEli='1';
  $tablas->update();
  return Redirect::to('tablas/tablas');
}
}
