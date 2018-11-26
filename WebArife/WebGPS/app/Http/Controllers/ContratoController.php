<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;
use webGps\Http\Requests;
use webGps\Contrato;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ContratoFormRequest;
use DB;

class ContratoController extends Controller
{
    public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $contrato=DB::table('contrato as con')->where('CodTipoServicio','LIKE','%'.$query.'%')
    ->join('cliente as cli','cli.IdCliente','=','con.IdCliente')
    ->join('actor as a','a.IdActor','=','cli.IdActor')
    ->join('empresa as e','e.IdEmpresa','=','con.IdEmpresa')
    ->join('vehiculo as v','v.IdVehiculo','=','con.IdVehiculo')
    ->select('con.IdContrato','con.CodTipoServicio',
    'con.FechaInicio','con.FechaFin',
    'a.PrimerNombre','con.CodTipoContrato',
    'e.RazonSocial','v.Placa','con.EstadoContrato','con.FchCrea',
    'con.UsrCrea','con.WksCrea','con.FchMod','con.UsrMod',
    'con.WksMod','con.FlgEli')
    ->where ('con.FlgEli','=','0')
    ->orderBy('con.IdContrato','desc')
    ->paginate(7);
    return view ('documentos/contrato.index',["contrato"=>$contrato,"searchText"=>$query]);
  }
}
public function create(){
  $cliente=DB::table('cliente as c')
  ->join('actor as a','a.IdActor','=','c.IdActor')
  #->select(DB::raw('CONCAT(a.PrimerNombre," ",a.Apellido_Paterno) as Persona','IdCliente'))
  ->where('c.FlgEli','=','0')->get();
  $empresa=DB::table('empresa')
  ->where('FlgEli','=','0')->get();
  $vehiculo=DB::table('vehiculo')
  ->where('FlgEli','=','0')->get();
  return view("documentos/contrato.create",['cliente'=>$cliente,'empresa'=>$empresa,'vehiculo'=>$vehiculo]);
}
public function store(ContratoFormRequest $request){
  $contrato=new Contrato;
  $contrato->IdContrato=$request->get('IdContrato');
  $contrato->CodTipoServicio=$request->get('CodTipoServicio');
  $contrato->FechaInicio=$request->get('FechaInicio');
  $contrato->FechaFin=$request->get('FechaFin');
  $contrato->IdCliente=$request->get('IdCliente');
  $contrato->CodTipoContrato=$request->get('CodTipoContrato');
  $contrato->IdEmpresa=$request->get('IdEmpresa');
  $contrato->IdVehiculo=$request->get('IdVehiculo');
  $contrato->EstadoContrato=$request->get('EstadoContrato');
  $contrato->FchCrea=Carbon::now();
  $contrato->UsrCrea=$request->get('UsrCrea');
  $contrato->WksCrea=$request->ip();
  $contrato->FchMod=Carbon::now();
  $contrato->UsrMod=$request->get('UsrMod');
  $contrato->WksMod=$request->ip();
  $contrato->FlgEli=0;
  $contrato->save();
  return Redirect::to('documentos/contrato');
}
public function show($id){
  return view("documentos/contrato.show", ["contrato"=>Contrato::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/contrato.edit", ["contrato"=>Contrato::findOrFail($id)]);
}
public function update(ContratoFormRequest $request,$id){;
 $contrato=Contrato::findOrFail($id);
 $contrato->IdContrato=$request->get('IdContrato');
 $contrato->CodTipoServicio=$request->get('CodTipoServicio');
 $contrato->FechaInicio=$request->get('FechaInicio');
 $contrato->FechaFin=$request->get('FechaFin');
 $contrato->IdCliente=$request->get('IdCliente');
 $contrato->CodTipoContrato=$request->get('CodTipoContrato');
 $contrato->IdEmpresa=$request->get('IdEmpresa');
 $contrato->IdVehiculo=$request->get('IdVehiculo');
 $contrato->EstadoContrato=$request->get('EstadoContrato');
 $contrato->FchMod=Carbon::now();
 $contrato->UsrMod=$request->get('UsrMod');
 $contrato->WksMod=$request->ip();
 $contrato->FlgEli=0;
 $contrato->update();
  return Redirect::to('documentos/contrato');
}
public function destroy($id){
  $contrato=Contrato::findOrFail($id);
  $contrato->FlgEli='1';
  $contrato->update();
  return Redirect::to('documentos/contrato');
 }
}
