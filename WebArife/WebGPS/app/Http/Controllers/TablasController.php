<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Tablas;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\TablasFormRequest;
use DB;

class TablasController extends Controller
{
     	public function __construct(){
}
  public function index(Request $request){
     if ($request) {
     $query=trim($request->get('searchText'));
     $tablas=DB::table('tablas')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdTabla','desc')
    ->paginate(7);
    return view ('tablas/tablas.index',["tablas"=>$tablas,"searchText"=>$query]);
  }
}
public function create(){
  return view("tablas/tablas.create");
}
public function store(TablasFormRequest $request){
  $tablas=new tablas;
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchCrea=$request->get('FchCrea');
  $tablas->UsrCrea=$request->get('UsrCrea');
  $tablas->WksCrea=$request->get('WksCrea');
  $tablas->FchMod=$request->get('FchMod');
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=1;
  $tablas->save();
  return Redirect::to('tablas/tablas');
}
public function show($id){
  return view("tablas/tablas.show", ["tablas"=>tablas::findOrFail($id)]);
}
public function edit($id){
  return view("tablas/tablas.edit", ["tablas"=>tablas::findOrFail($id)]);
}
public function update(TablasFormRequest $request,$id){
  $tablas=tablas::findOrFail($id);
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchCrea=$request->get('FchCrea');
  $tablas->UsrCrea=$request->get('UsrCrea');
  $tablas->WksCrea=$request->get('WksCrea');
  $tablas->FchMod=$request->get('FchMod');
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=$request->get('FlgEli');
  $tablas->update();
  return Redirect::to('tablas/tablas');
}
public function destroy($id){
  $tablas=tablas::findOrFail($id);
  $tablas->FlgEli='0';
  $tablas->update();
  return Redirect::to('tablas/tablas');
}
}
