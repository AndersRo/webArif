<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\OrdenTrabajo_Detalle;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\OrdenTrabajo_DetalleFormRequest;
use DB;


class OrdenTrabajo_DetalleController extends Controller
{
    public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $OrdenTrabajo_Detalle=DB::table('ordentrabajo_detalle')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdOrdenDetalle','desc')
    ->paginate(7);
    return view ('documentos/ordentrabajo_detalle.index',["ordentrabajo_detalle"=>$OrdenTrabajo_Detalle,"searchText"=>$query]);
  }
}
public function create(){
  return view("documentos/ordentrabajo_detalle.create");
}
public function store(OrdenTrabajo_DetalleFormRequest $request){
  $OrdenTrabajo_Detalle=new OrdenTrabajo_Detalle;
  $OrdenTrabajo_Detalle->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo_Detalle->IdDispositivo=$request->get('IdDispositivo');
  $OrdenTrabajo_Detalle->CodTipoTrabajo=$request->get('CodTipoTrabajo');
  $OrdenTrabajo_Detalle->FchCrea=Carbon::now();
  $OrdenTrabajo_Detalle->UsrCrea=$request->get('UsrCrea');
  $OrdenTrabajo_Detalle->WksCrea=$request->get('WksCrea');
  $OrdenTrabajo_Detalle->FchMod=Carbon::now();
  $OrdenTrabajo_Detalle->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo_Detalle->WksMod=$request->get('WksMod');
  $OrdenTrabajo_Detalle->FlgEli=1;
  $OrdenTrabajo_Detalle->FechaInicio=$request->get('FechaInicio');
  $OrdenTrabajo_Detalle->FechaFin=$request->get('FechaFin');
  $OrdenTrabajo_Detalle->save();
  return Redirect::to('documentos/ordentrabajo_detalle');
}
public function show($id){
  return view("documentos/ordentrabajo_detalle.show", ["ordentrabajo_detalle"=>OrdenTrabajo_Detalle::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/ordentrabajo_detalle.edit", ["ordentrabajo_detalle"=>OrdenTrabajo_Detalle::findOrFail($id)]);
}

public function update(OrdenTrabajo_DetalleFormRequest $request,$id){
  $OrdenTrabajo_Detalle=OrdenTrabajo_Detalle::findOrFail($id);
  $OrdenTrabajo_Detalle->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo_Detalle->IdDispositivo=$request->get('IdDispositivo');
  $OrdenTrabajo_Detalle->CodTipoTrabajo=$request->get('CodTipoTrabajo');
  $OrdenTrabajo_Detalle->FchMod=Carbon::now();
  $OrdenTrabajo_Detalle->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo_Detalle->WksMod=$request->get('WksMod');
  $OrdenTrabajo_Detalle->FlgEli=$request->get('FglEli');
  $OrdenTrabajo_Detalle->FechaInicio=$request->get('FechaInicio');
  $OrdenTrabajo_Detalle->FechaFin=$request->get('FechaFin');
  $OrdenTrabajo_Detalle->update();
  return Redirect::to('documentos/ordentrabajo_detalle');
}
public function destroy($id){
   $OrdenTrabajo_Detalle=OrdenTrabajo_Detalle::findOrFail($id);
   $OrdenTrabajo_Detalle->FlgEli='0';
   $OrdenTrabajo_Detalle->update();
   return Redirect::to('documentos/ordentrabajo_detalle');
  }
}
