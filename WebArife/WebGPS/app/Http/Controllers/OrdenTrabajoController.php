<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\ OrdenTrabajo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\ OrdenTrabajoFormRequest;
use DB;


class OrdenTrabajoController extends Controller
{
    	public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $cliente=DB::table('OrdenTrabajo')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdOrden','desc')
    ->paginate(7);
    return view ('OrdenTrabajo.index',["OrdenTrabajo"=>$OrdenTrabajo,"searchText"=>$query]);
  }
}
public function create(){
  return view("OrdenTrabajo.create");
}
public function store(OrdenTrabajoFormRequest $request){



  $OrdenTrabajo=new OrdenTrabajo;
  $OrdenTrabajo->IdEmpresa=$request->get('IdEmpresa');
  $OrdenTrabajo->IdMecanico=$request->get('IdMecanico');
  $OrdenTrabajo->IdCliente=$request->get('IdCliente');
  $OrdenTrabajo->IdVehiculo=$request->get('IdVehiculo');
  $OrdenTrabajo->FchCrea=$request->get('FchCrea');
  $OrdenTrabajo->WksCrea=$request->get('WksCrea');
  $OrdenTrabajo->FchMod=$request->get('FchMod');
  $OrdenTrabajo->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo->WksMod=$request->get('WksMod');
  $OrdenTrabajo->FlgEli=$request->get('FlgEli');
  $OrdenTrabajo->EstadoOrden=$request->get('EstadoOrden');
  $OrdenTrabajo->Obsvacion=$request->get('Obsvacion');
  $OrdenTrabajo->FechaRegistro=$request->get('FechaRegistro');
  $OrdenTrabajo->FechaProgramada=$request->get('FechaProgramada');
  $OrdenTrabajo->FechaEjecutada=$request->get('FechaEjecutada');
  $OrdenTrabajo->IdTaller=$request->get('IdTaller');

  $OrdenTrabajo->save;
  return Redirect::to('OrdenTrabajo');
}
public function show($id){
  return view("OrdenTrabajo.show", ["OrdenTrabajo"=>OrdenTrabajo::findOrFail($id)]);
}
public function edit($id){
  return view("OrdenTrabajo.edit", ["OrdenTrabajo"=>OrdenTrabajo::findOrFail($id)]);
}
public function update(ClienteFormRequest $request,$id){
  $OrdenTrabajo=cliente::findOrFail($id);
  $OrdenTrabajo->IdEmpresa=$request->get('IdEmpresa');
  $OrdenTrabajo->IdMecanico=$request->get('IdMecanico');
  $OrdenTrabajo->IdCliente=$request->get('IdCliente');
  $OrdenTrabajo->IdVehiculo=$request->get('IdVehiculo');
  $OrdenTrabajo->FchCrea=$request->get('FchCrea');
  $OrdenTrabajo->WksCrea=$request->get('WksCrea');
  $OrdenTrabajo->FchMod=$request->get('FchMod');
  $OrdenTrabajo->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo->WksMod=$request->get('WksMod');
  $OrdenTrabajo->FlgEli=$request->get('FlgEli');
  $OrdenTrabajo->EstadoOrden=$request->get('EstadoOrden');
  $OrdenTrabajo->Obsvacion=$request->get('Obsvacion');
  $OrdenTrabajo->FechaRegistro=$request->get('FechaRegistro');
  $OrdenTrabajo->FechaProgramada=$request->get('FechaProgramada');
  $OrdenTrabajo->FechaEjecutada=$request->get('FechaEjecutada');
  $OrdenTrabajo->IdTaller=$request->get('IdTaller');
  $OrdenTrabajo->update();
  return Redirect::to('OrdenTrabajo');
}
public function destroy($id){
  $OrdenTrabajo=OrdenTrabajo::findOrFail($id);
  $OrdenTrabajo->FlgEli='0';
  $OrdenTrabajo->update();
  return Redirect::to('OrdenTrabajo');
}
}
