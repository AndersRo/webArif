<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use webGps\AccesosPlataforma;
use webGps\Http\Requests\AccesosPlataformaFormRequest;
use DB;

class AccesosPlataformaController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
    		$query=trim($request->get('searchText'));
    		$accesosplataforma=DB::table('accesosplataforma')->where('IdAcceso','LIKE','%'.$query.'%')
				->where('FlgEli','=','1')
    		->orderBy('IdAcceso','desc')
    		->paginate(7);
    		return view ('plataforma.AccesosPlataforma.index',["accesosplataforma"=>$accesosplataforma,"searchText"=>$query]);
    	}
    }
    public function create(){
      return view("plataforma.accesosplataforma.create");
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
      $accesosplataforma->FglEli=1;
      $accesosplataforma->EstadoAcceso=$request->get('EstadoAcceso');
      $accesosplataforma->save();
      return Redirect::to('accesosplataforma/accesosplataforma');
    }
    public function show($id){
      return view("accesosplataforma.accesosplataforma.show", ["accesosplataforma"=>AccesosPlataforma::findOrFail($id)]);
    }
    public function edit($id){
      return view("accesosplataforma.accesosplataforma.edit", ["accesosplataforma"=>AccesosPlataforma::findOrFail($id)]);
    }
    public function update(AccesosPlataformaFormRequest $request,$id){
      $accesosplataforma=AccesosPlataforma::findOrFail($id);
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
      return Redirect::to('accesosplataforma/accesosplataforma');
    }
    public function destroy($id){
      $accesosplataforma=AccesosPlataforma::findOrFail($id);
			$accesosplataforma->FlgEli='0';
			$accesosplataforma->update();
			return Redirect::to('plataforma/AccesosPlataforma');
    }
}
