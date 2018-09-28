<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\Contrato_anexo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\Contrato_anexoFormRequest;
use DB;



class Contrato_anexocontroller extends Controller
{
  public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $contrato_anexo=DB::table('contrato_anexo')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','1')
    ->orderBy('IdContrato_Anexo','desc')
    ->paginate(7);
    return view ('contrato_anexo.index',[""=>$contrato_anexo,"searchText"=>$query]);
  }-
}
public function create(){
  return view("contrato_anexo.create");
}
public function store(contrato_anexoFormRequest $request){

  'IdContrato',
  'CodDocumentoAnexo',
  'RutaDocumento',
  'FchCrea',
  'UsrCrea',
  'WksCrea',
  'FchMod',
  'UsrMod',
  'WksMod',
  'FlgEli'

  $contrato_anexo->IdContrato=$request->get('IdContrato');
  $contrato_anexo->CodDocumentoAnexo=$request->get('CodDocumentoAnexo');
  $contrato_anexo->RutaDocumento=$request->get('RutaDocumento');
  $contrato_anexo->FchCrea=$request->get('FchCrea');
  $contrato_anexo->UsrCrea=$request->get('UsrCrea');
  $contrato_anexo->FchCrea=$request->get('FchCrea');
  $contrato_anexo->UsrCrea=$request->get('UsrCrea');
  <return Redirect::to('contrato_anexo');
}
pub |||||||||||||||lic function show($id){
  return view("contrato_anexo.show", ["contrato_anexo"=>contrato_anexo::findOrFail($id)]);
}
public function edit($id){
  return view("contrato_anexo.edit", ["contrato_anexo"=>contrato_anexo::findOrFail($id)]);
}
public function update(ClienteFormRequest $request,$id){
  $contrato_anexo=contrato_anexo::findOrFail($id);
  $contrato_anexo->FchCrea=$request->get('FchCrea');
  $contrato_anexo->UsrCrea=$request->get('UsrCrea');
  $contrato_anexo->WksCrea=$request->get('WksCrea');
  $contrato_anexo->FchMod=$request->get('FchMod');
  $contrato_anexo->UsrMod=$request->get('UsrMod');
  $contrato_anexo->WksMod=$request->get('WksMod');
  $contrato_anexo->FglEli=$request->get('FglEli');
  $contrato_anexo->update();
  return Redirect::to('contrato_anexo');
}
public function destroy($id){
    $contrato_anexo=contrato_anexo::findOrFail($id);
    $contrato_anexo->FlgEli='0';
    $contrato_anexo->update();
  return Redirect::to('contrato_anexo');
  }
}
