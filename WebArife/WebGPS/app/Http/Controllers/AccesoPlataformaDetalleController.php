<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use webGps\Http\Requests\AccesoPlataformaDetalleFormRequet;
use webGps\AccesoPlataformaDetalle;
use DB;

class AccesoPlataformaDetalleController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $accesoplataformadetalle=DB::table('accesoplataformadetalle')->where('UsrCrea','LIKE','%'.$query.'%')
        ->where('FlgEli','=','1')
        ->orderBy('IdAccesoDetalle','desc')
        ->paginate(7);
        return view ('seguridad.accesoplataformadetalle.index',["accesoplataformadetalle"=>$accesoplataformadetalle,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("seguridad.accesoplataformadetalle.create");
    }
    public function store(AccesoPlataformaDetalleFormRequest $request){
      $accesoplataformadetalle=new accesoplataformadetalle;
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->FchCrea=$request->get('FchCrea');
      $accesoplataformadetalle->UsrCrea=$request->get('UsrCrea');
      $accesoplataformadetalle->WksCrea=$request->get('WksCrea');
      $accesoplataformadetalle->FchMod=$request->get('FchMod');
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->get('WksMod');
      $accesoplataformadetalle->FlgEli=$request->get('FlgEli');
      $accesoplataformadetalle->save;
      return Redirect::to('seguridad/accesoplataformadetalle');
    }
    public function show($id){
      return view("seguridad.accesoplataformadetalle.show", ["accesoplataformadetalle"=>accesoplataformadetalle::findOrFail($id)]);
    }
    public function edit($id){
      return view("seguridad.accesoplataformadetalle.edit", ["accesoplataformadetalle"=>accesoplataformadetalle::findOrFail($id)]);
    }
    public function update(AccesoPlataformaDetalleFormRequest $request,$id){
      $accesoplataformadetalle=accesoplataformadetalle::findOrFail($id);
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->FchCrea=$request->get('FchCrea');
      $accesoplataformadetalle->UsrCrea=$request->get('UsrCrea');
      $accesoplataformadetalle->WksCrea=$request->get('WksCrea');
      $accesoplataformadetalle->FchMod=$request->get('FchMod');
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->get('WksMod');
      $accesoplataformadetalle->FlgEli=$request->get('FlgEli');
      $accesoplataformadetalle->update();
      return Redirect::to('seguridad/accesoplataformadetalle');
    }
    public function destroy($id){

    }
}