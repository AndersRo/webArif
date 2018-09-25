<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use webGps\Http\Requests\AccesoPlataformaComandosFormRequet;
use webGps\AccesoPlataformaComandos;
use DB;

class AccesoPlataformaComandosController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $accesoplataformacomandos=DB::table('accesoplataformacomandos')->where('FchCrea','LIKE','%'.$query.'%')
        ->where('FlgEli','=','1')
        ->orderBy('IdAccesoComandos','desc')
        ->paginate(7);
        return view ('seguridad.accesoplataformacomandos.index',["accesoplataformacomandos"=>$accesoplataformacomandos,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("seguridad.accesoplataformacomandos.create");
    }
    public function store(AccesoPlataformaComandosFormRequest $request){
      $accesoplataformacomandos=new accesoplataformacomandos;
      $accesoplataformacomandos->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformacomandos->FchCrea=$request->get('FchCrea');
      $accesoplataformacomandos->UsrCrea=$request->get('UsrCrea');
      $accesoplataformacomandos->WksCrea=$request->get('WksCrea');
      $accesoplataformacomandos->FchMod=$request->get('FchMod');
      $accesoplataformacomandos->UsrMod=$request->get('UsrMod');
      $accesoplataformacomandos->WksMod=$request->get('WksMod');
      $accesoplataformacomandos->FlgEli=$request->get('FlgEli');
      $accesoplataformacomandos->save;
      return Redirect::to('seguridad/accesoplataformacomandos');
    }
    public function show($id){
      return view("seguridad.accesoplataformacomandos.show", ["accesoplataformacomandos"=>accesoplataformacomandos::findOrFail($id)]);
    }
    public function edit($id){
      return view("seguridad.accesoplataformacomandos.edit", ["accesoplataformacomandos"=>accesoplataformacomandos::findOrFail($id)]);
    }
    public function update(AccesoPlataformaComandosFormRequest $request,$id){
      $accesoplataformacomandos=accesoplataformacomandos::findOrFail($id);
      $accesoplataformacomandos->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformacomandos->FchCrea=$request->get('FchCrea');
      $accesoplataformacomandos->UsrCrea=$request->get('UsrCrea');
      $accesoplataformacomandos->WksCrea=$request->get('WksCrea');
      $accesoplataformacomandos->FchMod=$request->get('FchMod');
      $accesoplataformacomandos->UsrMod=$request->get('UsrMod');
      $accesoplataformacomandos->WksMod=$request->get('WksMod');
      $accesoplataformacomandos->FlgEli=$request->get('FlgEli');
      $accesoplataformacomandos->update();
      return Redirect::to('seguridad/accesoplataformacomandos');
    }
    public function destroy($id){

    }
}