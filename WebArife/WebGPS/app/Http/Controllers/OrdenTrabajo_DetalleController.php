<?php

namespace webGps\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\OrdenTrabajo_Detalle;
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
    ->orderBy('IdOrdenTrabajo_Detalle','desc')
    ->paginate(7);
    return view ('OrdenTrabajo_Detalle.index',["OrdenTrabajo_Detalle"=>$OrdenTrabajo_Detalle,"searchText"=>$query]);
  }
}
public function create(){
  return view("OrdenTrabajo_Detalle.create");
}
public function store(ClienteFormRequest $request){
 
  $OrdenTrabajo_Detalle=new OrdenTrabajo_Detalle;
  $OrdenTrabajo_Detalle->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo_Detalle->IdDispositivo=$request->get('IdDispositivo');
  $OrdenTrabajo_Detalle->CodTipoTrabajo=$request->get('CodTipoTrabajo');
  $OrdenTrabajo_Detalle->FchCrea=$request->get('FchCrea');
  $OrdenTrabajo_Detalle->UsrCrea=$request->get('UsrCrea');
  $OrdenTrabajo_Detalle->FchMod=$request->get('FchMod');
  $OrdenTrabajo_Detalle->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo_Detalle->WksMod=$request->get('WksMod');
  $OrdenTrabajo_Detalle->FlgEli=$request->get('FglEli');
  $OrdenTrabajo_Detalle->FechaInicio=$request->get('FechaInicio');
  $OrdenTrabajo_Detalle->FechaFin=$request->get('FechaFin');
  $OrdenTrabajo_Detalle->save;
  return Redirect::to('OrdenTrabajo_Detalle');
}
public function show($id){
  return view("OrdenTrabajo_Detalle.show", ["OrdenTrabajo_Detalle"=>OrdenTrabajo_Detalle::findOrFail($id)]);
}
public function edit($id){
  return view("OrdenTrabajo_Detalle.edit", ["OrdenTrabajo_Detalle"=>OrdenTrabajo_Detalle::findOrFail($id)]);
}

public function update(ClienteFormRequest $request,$id){
  $OrdenTrabajo_Detalle=OrdenTrabajo_Detalle::findOrFail($id);
  $OrdenTrabajo_Detalle->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo_Detalle->IdDispositivo=$request->get('IdDispositivo');
  $OrdenTrabajo_Detalle->CodTipoTrabajo=$request->get('CodTipoTrabajo');
  $OrdenTrabajo_Detalle->FchCrea=$request->get('FchCrea');
  $OrdenTrabajo_Detalle->UsrCrea=$request->get('UsrCrea');
  $OrdenTrabajo_Detalle->FchMod=$request->get('FchMod');
  $OrdenTrabajo_Detalle->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo_Detalle->WksMod=$request->get('WksMod');
  $OrdenTrabajo_Detalle->FlgEli=$request->get('FglEli');
  $OrdenTrabajo_Detalle->FechaInicio=$request->get('FechaInicio');
  $OrdenTrabajo_Detalle->FechaFin=$request->get('FechaFin');
  $OrdenTrabajo_Detalle->update();
  return Redirect::to('OrdenTrabajo_Detalle');
}
public function destroy($id){
   $OrdenTrabajo_Detalle=OrdenTrabajo_Detalle::findOrFail($id);
   $OrdenTrabajo_Detalle->FlgEli='0';
   $OrdenTrabajo_Detalle->update();
   return Redirect::to('OrdenTrabajo_Detalle');
  }
}
