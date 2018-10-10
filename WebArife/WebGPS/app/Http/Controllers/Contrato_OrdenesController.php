<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\Contrato_Ordenes;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\Contrato_OrdenesFormRequest;
use DB;

class Contrato_OrdenesController extends Controller
{
  public function __construct(){
}
public function index(Request $request){
if ($request) {
  $query=trim($request->get('searchText'));
  $Contrato_Ordenes=DB::table('contrato_ordenes')->where('IdOrden','LIKE','%'.$query.'%')
  ->where('FlgEli','=','1')
  ->orderBy('IdContratoOrdenes','desc')
  ->paginate(7);
  return view ('documentos/contrato_ordenes.index',["contrato_ordenes"=>$Contrato_Ordenes,"searchText"=>$query]);
}
}
public function create(){
  return view("documentos/contrato_ordenes.create");
}
public function store(Contrato_OrdenesFormRequest $request){
  $Contrato_Ordenes=new Contrato_Ordenes;
  $Contrato_Ordenes->IdContrato=$request->get('IdContrato');
  $Contrato_Ordenes->IdOrden=$request->get('IdOrden');
  $Contrato_Ordenes->FchCrea=Carbon::now();
  $Contrato_Ordenes->UsrCrea=$request->get('UsrCrea');
  $Contrato_Ordenes->WksCrea=$request->get('WksCrea');
  $Contrato_Ordenes->FchMod=Carbon::now();
  $Contrato_Ordenes->WksMod=$request->get('WksMod');
  $Contrato_Ordenes->UsrMod=$request->get('UsrMod');
  $Contrato_Ordenes->FglEli=1;
  $Contrato_Ordenes->save();
  return Redirect::to('documentos/contrato_ordenes');
}
public function show($id){
return view("documentos/contrato_ordenes.show", ["Contrato_Ordenes"=>Contrato_Ordenes::findOrFail($id)]);
}
public function edit($id){
return view("documentos/contrato_ordenes.edit", ["Contrato_Ordenes"=>Contrato_Ordenes::findOrFail($id)]);
}
public function update(Contrato_OrdenesFormRequest $request,$id){
  $Contrato_Ordenes=Contrato_Ordenes::findOrFail($id);
  $Contrato_Ordenes->IdContrato=$request->get('IdContrato');
  $Contrato_Ordenes->IdOrden=$request->get('IdOrden');
  $Contrato_Ordenes->FchMod=Carbon::now();
  $Contrato_Ordenes->WksMod=$request->get('WksMod');
  $Contrato_Ordenes->UsrMod=$request->get('UsrMod');
  $Contrato_Ordenes->FglEli=$request->get('FglEli');
  $Contrato_Ordenes->update();
  return Redirect::to('documentos/contrato_ordenes');
}
public function destroy($id){
  $Contrato_Ordenes=Contrato_Ordenes::findOrFail($id);
  $Contrato_Ordenes->FlgEli='0';
  $Contrato_Ordenes->update();
  return Redirect::to('documentos/contrato_ordenes');
}
}
