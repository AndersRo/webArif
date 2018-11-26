<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\OrdenTrabajo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\OrdenTrabajoFormRequest;
use DB;

class OrdenTrabajoController extends Controller
{
    	public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $OrdenTrabajo=DB::table('ordentrabajo as o')->where('o.UsrCrea','LIKE','%'.$query.'%')
    ->join('empresa as e','e.IdEmpresa','=','o.IdEmpresa')
    ->join('cliente as c','c.IdCliente','=','o.IdCliente')
    ->join('mecanico as m','m.IdMecanico','=','o.IdMecanico')
    ->join('actor as a','a.IdActor','=','c.IdActor')
    ->join('actor as ma','ma.IdActor','=','m.IdActor')
    ->join('vehiculo as v','v.IdVehiculo','=','o.IdVehiculo')
    ->select('o.IdOrden','e.RazonSocial',
    'a.PrimerNombre as NomCli','ma.PrimerNombre as NomMec','v.Placa',
    'o.FchCrea','o.UsrCrea','o.WksCrea','o.FchMod','o.UsrMod','o.WksMod',
    'o.FlgEli','o.EstadoOrden','o.Obsvacion','o.FechaRegistro','o.FechaProgramada')
    ->where('o.FlgEli','=','0')
    ->orderBy('o.IdOrden','desc')
    ->paginate(7);
    return view ('documentos/ordentrabajo.index',["ordentrabajo"=>$OrdenTrabajo,"searchText"=>$query]);
  }
}
public function create(){
  $empresa=DB::table('empresa')
  ->where('FlgEli','=','0')->get();
  $mecanico=DB::table('mecanico as m')
  ->join('actor as a','a.IdActor','=','m.IdActor')
  ->where('m.FlgEli','=','0')->get();
  $cliente=DB::table('cliente as c')
  ->join('actor as a','a.IdActor','=','c.IdActor')
  ->where('c.FlgEli','=','0')->get();
  $vehiculo=DB::table('vehiculo')
  ->where('FlgEli','=','0')->get();
  $taller=DB::table('taller')
  ->where('FlgEli','=','0')->get();
  return view("documentos/ordentrabajo.create",["empresa"=>$empresa,"mecanico"=>$mecanico,"cliente"=>$cliente,"vehiculo"=>$vehiculo,"taller"=>$taller]);
}

public function store(OrdenTrabajoFormRequest $request){
  $OrdenTrabajo=new OrdenTrabajo;
  $OrdenTrabajo->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo->IdEmpresa=$request->get('IdEmpresa');
  $OrdenTrabajo->IdMecanico=$request->get('IdMecanico');
  $OrdenTrabajo->IdCliente=$request->get('IdCliente');
  $OrdenTrabajo->IdVehiculo=$request->get('IdVehiculo');
  $OrdenTrabajo->FchCrea=Carbon::now();
  $OrdenTrabajo->UsrCrea=$request->get('UsrCrea');
  $OrdenTrabajo->WksCrea=$request->ip();
  $OrdenTrabajo->FchMod=Carbon::now();
  $OrdenTrabajo->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo->WksMod=$request->ip();
  $OrdenTrabajo->FlgEli=0;
  $OrdenTrabajo->EstadoOrden=$request->get('EstadoOrden');
  $OrdenTrabajo->Obsvacion=$request->get('Obsvacion');
  $OrdenTrabajo->FechaRegistro=$request->get('FechaRegistro');
  $OrdenTrabajo->FechaProgramada=$request->get('FechaProgramada');
  $OrdenTrabajo->FechaEjecutada=$request->get('FechaEjecutada');
  $OrdenTrabajo->IdTaller=$request->get('IdTaller');
  $OrdenTrabajo->save();
  return Redirect::to('documentos/ordentrabajo');
}
public function show($id){
  return view("documentos/ordentrabajo.show", ["OrdenTrabajo"=>OrdenTrabajo::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/ordentrabajo.edit", ["OrdenTrabajo"=>OrdenTrabajo::findOrFail($id)]);
}
public function update(OrdenTrabajoFormRequest $request,$id){
  $OrdenTrabajo=OrdenTrabajo::findOrFail($id);
  $OrdenTrabajo->IdOrden=$request->get('IdOrden');
  $OrdenTrabajo->IdEmpresa=$request->get('IdEmpresa');
  $OrdenTrabajo->IdMecanico=$request->get('IdMecanico');
  $OrdenTrabajo->IdCliente=$request->get('IdCliente');
  $OrdenTrabajo->IdVehiculo=$request->get('IdVehiculo');
  $OrdenTrabajo->FchMod=Carbon::now();
  $OrdenTrabajo->UsrMod=$request->get('UsrMod');
  $OrdenTrabajo->WksMod=$request->ip();
  $OrdenTrabajo->EstadoOrden=$request->get('EstadoOrden');
  $OrdenTrabajo->Obsvacion=$request->get('Obsvacion');
  $OrdenTrabajo->FechaRegistro=$request->get('FechaRegistro');
  $OrdenTrabajo->FechaProgramada=$request->get('FechaProgramada');
  $OrdenTrabajo->FechaEjecutada=$request->get('FechaEjecutada');
  $OrdenTrabajo->IdTaller=$request->get('IdTaller');
  $OrdenTrabajo->update();
  return Redirect::to('documentos/ordentrabajo');
}
public function destroy($id){
  $OrdenTrabajo=OrdenTrabajo::findOrFail($id);
  $OrdenTrabajo->FlgEli='1';
  $OrdenTrabajo->update();
  return Redirect::to('documentos/ordentrabajo');
}
}
