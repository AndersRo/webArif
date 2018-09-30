<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

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
    $contrato=DB::table('contrato')->where('CodTipoServicio','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('idContrato','desc')
    ->paginate(7);
    return view ('documentos/contrato.index',["contrato"=>$contrato,"searchText"=>$query]);
  }
}
public function create(){
  return view("documentos/contrato.create");
}
public function store(ModeloFormRequest $request){

  $modelo=new contrato;
  $contrato->CodTipoServicio=$request->get('CodTipoServicio');
  $contrato->Fechainicio=$request->get('Fechainicio');
  $contrato->Fechafin=$request->get('Fechafin');
  $contrato->IdCliente=$request->get('IdCliente');
  $contrato->CodTipoContrato=$request->get('CodTipoContrato');
  $contrato->idEmpresa=$request->get('idEmpresa');
  $contrato->idVehiculo=$request->get('idVehiculo');
  $contrato->EstadoContrato=$request->get('EstadoContrato');
  $contrato->FchCrea=$request->get('FchCrea');
  $contrato->UsrCrea=$request->get('UsrCrea');
  $contrato->WksCrea=$request->get('WksCrea');
  $contrato->FchMod=$request->get('FchMod');
  $contrato->UsrMod=$request->get('UsrMod');
  $contrato->WksMod=$request->get('WksMod');
  $contrato->FlgEli=$request->get('FlgEli');
  return Redirect::to('documentos/contrato');
}
public function show($id){
  return view("documentos/contrato.show", ["contrato"=>"contrato"::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/contrato.edit", ["contrato"=>contrato::findOrFail($id)]);
}
public function update(modeloFormRequest $request,$id){

 $modelo=new contrato;
 $contrato->CodTipoServicio=$request->get('CodTipoServicio');
 $contrato->Fechainicio=$request->get('Fechainicio');
 $contrato->Fechafin=$request->get('Fechafin');
 $contrato->IdCliente=$request->get('IdCliente');
 $contrato->CodTipoContrato=$request->get('CodTipoContrato');
 $contrato->idEmpresa=$request->get('idEmpresa');
 $contrato->idVehiculo=$request->get('idVehiculo');
 $contrato->EstadoContrato=$request->get('EstadoContrato');
 $contrato->FchCrea=$request->get('FchCrea');
 $contrato->UsrCrea=$request->get('UsrCrea');
 $contrato->WksCrea=$request->get('WksCrea');
 $contrato->FchMod=$request->get('FchMod');
 $contrato->UsrMod=$request->get('UsrMod');
 $contrato->WksMod=$request->get('WksMod');
 $contrato->FlgEli=$request->get('FlgEli');
 $contrato->update();
  return Redirect::to('documentos/contrato');
}
public function destroy($id){
  $contrato=contrato::findOrFail($id);
  $contrato->FlgEli='0';
  $contrato->update();
  return Redirect::to('documentos/contrato');
 }
}
