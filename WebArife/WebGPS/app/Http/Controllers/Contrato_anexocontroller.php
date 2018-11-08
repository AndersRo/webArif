<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\Contrato_Anexo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\Contrato_AnexoFormRequest;
use DB;

class Contrato_AnexoController extends Controller
{
  public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $contrato_anexo=DB::table('contrato_anexo')->where('CodDocumentoAnexo','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdContratoAnexo','desc')
    ->paginate(7);
    return view ('documentos/contrato_anexo.index',["contrato_anexo"=>$contrato_anexo,"searchText"=>$query]);
  }
}
public function create(){
  $contrato=DB::table('contrato')
  ->where('FlgEli','=','1')->get();
  return view("documentos/contrato_anexo.create",["contrato"=>$contrato]);
}
public function store(Contrato_AnexoFormRequest $request){
  $contrato_anexo=new Contrato_Anexo;
  $contrato_anexo->IdContratoAnexo=$request->get('IdContratoAnexo');
  $contrato_anexo->IdContrato=$request->get('IdContrato');
  $contrato_anexo->CodDocumentoAnexo=$request->get('CodDocumentoAnexo');
  $contrato_anexo->RutaDocumento=$request->get('RutaDocumento');
  $contrato_anexo->FchCrea=Carbon::now();
  $contrato_anexo->UsrCrea=$request->get('UsrCrea');
  $contrato_anexo->WksCrea=$request->ip();
  $contrato_anexo->FchMod=Carbon::now();
  $contrato_anexo->UsrMod=$request->get('UsrMod');
  $contrato_anexo->WksMod=$request->ip();
  $contrato_anexo->FlgEli=1;
  $contrato_anexo->save();
  return Redirect::to('documentos/contrato_anexo');
}
public function show($id){
  return view("documentos/contrato_anexo.show", ["contrato_anexo"=>Contrato_Anexo::findOrFail($id)]);
}
public function edit($id){
  return view("documentos/contrato_anexo.edit", ["contrato_anexo"=>Contrato_Anexo::findOrFail($id)]);
}
public function update(Contrato_AnexoFormRequest $request,$id){
  $contrato_anexo=Contrato_Anexo::findOrFail($id);
  $contrato_anexo->IdContratoAnexo=$request->get('IdContratoAnexo');
  $contrato_anexo->IdContrato=$request->get('IdContrato');
  $contrato_anexo->CodDocumentoAnexo=$request->get('CodDocumentoAnexo');
  $contrato_anexo->RutaDocumento=$request->get('RutaDocumento');
  $contrato_anexo->FchMod=Carbon::now();
  $contrato_anexo->UsrMod=$request->get('UsrMod');
  $contrato_anexo->WksMod=$request->ip();
  $contrato_anexo->FlgEli=1;
  $contrato_anexo->update();
  return Redirect::to('documentos/contrato_anexo');
}
public function destroy($id){
    $contrato_anexo=Contrato_Anexo::findOrFail($id);
    $contrato_anexo->FlgEli='0';
    $contrato_anexo->update();
  return Redirect::to('documentos/contrato_anexo');
  }
}
