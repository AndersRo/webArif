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
    $contrato=DB::table('contrato')->where('CodTipoServicio','LIKE','%'.$query.'%')
    ->where ('FlgEli','=','1')
    ->orderBy('IdContrato','desc')
    ->paginate(7);
    return view ('documentos/contrato.index',["contrato"=>$contrato,"searchText"=>$query]);
  }
}
public function create(){
  return view("documentos/contrato.create");
}
public function store(ContratoFormRequest $request){
  $contrato=new Contrato;
  $contrato->CodTipoServicio=$request->get('CodTipoServicio');
  $contrato->Fechainicio=$request->get('Fechainicio');
  $contrato->Fechafin=$request->get('Fechafin');
  $contrato->IdCliente=$request->get('IdCliente');
  $contrato->CodTipoContrato=$request->get('CodTipoContrato');
  $contrato->IdEmpresa=$request->get('IdEmpresa');
  $contrato->IdVehiculo=$request->get('IdVehiculo');
  $contrato->EstadoContrato=$request->get('EstadoContrato');
  $contrato->FchCrea=Carbon::now();
  $contrato->UsrCrea=$request->get('UsrCrea');
  $contrato->WksCrea=$request->get('WksCrea');
  $contrato->FchMod=Carbon::now();
  $contrato->UsrMod=$request->get('UsrMod');
  $contrato->WksMod=$request->get('WksMod');
  $contrato->FlgEli=1;
  $contrato->save();
  return Redirect::to('documentos/contrato');
}
public function show($id){
  return view("documentos/contrato.show", ["contrato"=>"contrato"::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/contrato.edit", ["contrato"=>contrato::findOrFail($id)]);
}
public function update(ContratoFormRequest $request,$id){
 $contrato=new Contrato;
 $contrato->CodTipoServicio=$request->get('CodTipoServicio');
 $contrato->Fechainicio=$request->get('Fechainicio');
 $contrato->Fechafin=$request->get('Fechafin');
 $contrato->IdCliente=$request->get('IdCliente');
 $contrato->CodTipoContrato=$request->get('CodTipoContrato');
 $contrato->IdEmpresa=$request->get('IdEmpresa');
 $contrato->IdVehiculo=$request->get('IdVehiculo');
 $contrato->EstadoContrato=$request->get('EstadoContrato');
 $contrato->FchMod=Carbon::now();
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
