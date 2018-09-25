<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use webGps\Http\Requests\AccesosPlataformaFormRequet;
use webGps\AccesosPlataforma;
use DB;

class AccesosPlataformaController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
    		$query=trim($request->get('searchText'));
    		$accesosplataforma=DB::table('accesosplataforma')->where('LoginAcceso','LIKE','%'.$query.'%')
				->where('FlgEli','=','1')
    		->orderBy('IdAcceso','desc')
    		->paginate(7);
    		return view ('seguridad.accesosplataforma.index',["accesosplataforma"=>$accesosplataforma,"searchText"=>$query]);
    	}
    }
    public function create(){
      return view("seguridad.accesosplataforma.create");
    }
    public function store(AccesosPlataformaFormRequest $request){
      $accesosplataforma=new accesosplataforma;
      $accesosplataforma->IdCliente=$request->get('IdCliente');
      $accesosplataforma->FlgAccesoApp=$request->get('FlgAccesoApp');
      $accesosplataforma->FlgAccesoWeb=$request->get('FlgAccesoWeb');
      $accesosplataforma->IdEmpresa=$request->get('IdEmpresa');
      $accesosplataforma->MaxConexiones=$request->get('MaxConexiones');
      $accesosplataforma->LoginAcceso=$request->get('LoginAcceso');
      $accesosplataforma->ContrasnaPlataforma=$request->get('ContrasnaPlataforma');
      $accesosplataforma->ContrasenaComandos=$request->get('ContrasenaComandos');
      $accesosplataforma->FchCrea=$request->get('FchCrea');
      $accesosplataforma->WksCrea=$request->get('WksCrea');
      $accesosplataforma->UsrCrea=$request->get('UsrCrea');
      $accesosplataforma->FchMod=$request->get('FchMod');
      $accesosplataforma->WksMod=$request->get('WksMod');
      $accesosplataforma->UsrMod=$request->get('UsrMod');
      $accesosplataforma->FglEli=$request->get('FglEli');
      $accesosplataforma->EstadoAcceso=$request->get('EstadoAcceso');
      $accesosplataforma->save;
      return Redirect::to('seguridad/accesosplataforma');
    }
    public function show($id){
      return view("seguridad.accesosplataforma.show", ["accesosplataforma"=>accesosplataforma::findOrFail($id)]);
    }
    public function edit($id){
      return view("seguridad.accesosplataforma.edit", ["accesosplataforma"=>accesosplataforma::findOrFail($id)]);
    }
    public function update(AccesosPlataformaFormRequest $request,$id){
      $accesosplataforma=accesosplataforma::findOrFail($id);
      $accesosplataforma->IdCliente=$request->get('IdCliente');
      $accesosplataforma->FlgAccesoApp=$request->get('FlgAccesoApp');
      $accesosplataforma->FlgAccesoWeb=$request->get('FlgAccesoWeb');
      $accesosplataforma->IdEmpresa=$request->get('IdEmpresa');
      $accesosplataforma->MaxConexiones=$request->get('MaxConexiones');
      $accesosplataforma->LoginAcceso=$request->get('LoginAcceso');
      $accesosplataforma->ContrasnaPlataforma=$request->get('ContrasnaPlataforma');
      $accesosplataforma->ContrasenaComandos=$request->get('ContrasenaComandos');
      $accesosplataforma->FchCrea=$request->get('FchCrea');
      $accesosplataforma->WksCrea=$request->get('WksCrea');
      $accesosplataforma->UsrCrea=$request->get('UsrCrea');
      $accesosplataforma->FchMod=$request->get('FchMod');
      $accesosplataforma->WksMod=$request->get('WksMod');
      $accesosplataforma->UsrMod=$request->get('UsrMod');
      $accesosplataforma->FglEli=$request->get('FglEli');
      $accesosplataforma->EstadoAcceso=$request->get('EstadoAcceso');
      $accesosplataforma->update();
      return Redirect::to('seguridad/accesosplataforma');
    }
    public function destroy($id){

    }
}
