<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\ Tablas;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\ TallerFormRequest;
use DB;

class TablasController extends Controller
{
     	public function __construct(){
}
  public function index(Request $request){
     if ($request) {
     $query=trim($request->get('searchText'));
     $taller=DB::table('taller')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdTabla','desc')
    ->paginate(7);
    return view ('tablas.index',["tablas"=>$tablas,"searchText"=>$query]);
  }
}
public function create(){
  return view("tablas.create");
}
public function store(tablasFormRequest $request){



  $Tablas=new tablas;
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchCrea=$request->get('FchCrea');
  $tablas->UsrCrea=$request->get('UsrCrea');
  $tablas->WksCrea=$request->get('WksCrea');
  $tablas->FchMod=$request->get('FchMod');
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=$request->get('FlgEli');


  $Tablas->save;
  return Redirect::to('tablas');
}
public function show($id){
  return view("tablas.show", ["tablas"=>tablas::findOrFail($id)]);
}
public function edit($id){
  return view("Tablas.edit", ["tablas"=>tablas::findOrFail($id)]);
}
public function update(TablasFormRequest $request,$id){
  $tablas=Taller::findOrFail($id);
  $tablas->Descripcion=$request->get('Descripcion');
  $tablas->FchCrea=$request->get('FchCrea');
  $tablas->UsrCrea=$request->get('UsrCrea');
  $tablas->WksCrea=$request->get('WksCrea');
  $tablas->FchMod=$request->get('FchMod');
  $tablas->UsrMod=$request->get('UsrMod');
  $tablas->WksMod=$request->get('WksMod');
  $tablas->FlgEli=$request->get('FlgEli');
  $tablas->update();
  return Redirect::to('Taller');
}
public function destroy($id){
  $Taller=Taller::findOrFail($id);
  $Taller->FlgEli='0';
  $Taller->update();
  return Redirect::to('Taller');
}
}
