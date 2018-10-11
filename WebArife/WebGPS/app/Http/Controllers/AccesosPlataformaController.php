<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\carbon;

use webGps\Http\Requests;
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
      return view("plataforma.AccesosPlataforma.create");
    }
    public function store(AccesosPlataformaFormRequest $request){
      $accesosplataforma=new AccesosPlataforma;
      $accesosplataforma->IdAcceso=$request->get('IdAcceso');
      $accesosplataforma->IdCliente=$request->get('IdCliente');
      $accesosplataforma->FlgAccesoApp=$request->get('FlgAccesoApp');
      $accesosplataforma->FlgAccesoWeb=$request->get('FlgAccesoWeb');
      $accesosplataforma->IdEmpresa=$request->get('IdEmpresa');
      $accesosplataforma->MaxConexiones=$request->get('MaxConexiones');
      $accesosplataforma->LoginAcceso=$request->get('LoginAcceso');
      $accesosplataforma->ContrasnaPlataforma=$request->get('ContrasnaPlataforma');
      $accesosplataforma->ContrasenaComados=$request->get('ContrasenaComados');
      $accesosplataforma->FchCrea=Carbon::now();
      $accesosplataforma->WksCrea=$request->ip();
      $accesosplataforma->UsrCrea=$request->get('UsrCrea');
      $accesosplataforma->FchMod=Carbon::now();
      $accesosplataforma->WksMod=$request->ip();
      $accesosplataforma->UsrMod=$request->get('UsrMod');
      $accesosplataforma->FlgEli=1;
      $accesosplataforma->EstadoAcceso=$request->get('EstadoAcceso');
      $accesosplataforma->save();
      return Redirect::to('plataforma/AccesosPlataforma');
    }
    public function show($id){
      return view("plataforma.AccesosPlataforma.show", ["accesosplataforma"=>AccesosPlataforma::findOrFail($id)]);
    }
    public function edit($id){
      return view("plataforma.AccesosPlataforma.edit", ["accesosplataforma"=>AccesosPlataforma::findOrFail($id)]);
    }
    public function update(AccesosPlataformaFormRequest $request,$id){
      $accesosplataforma=AccesosPlataforma::findOrFail($id);
      $accesosplataforma->IdAcceso=$request->get('IdAcceso');
      $accesosplataforma->IdCliente=$request->get('IdCliente');
      $accesosplataforma->FlgAccesoApp=$request->get('FlgAccesoApp');
      $accesosplataforma->FlgAccesoWeb=$request->get('FlgAccesoWeb');
      $accesosplataforma->IdEmpresa=$request->get('IdEmpresa');
      $accesosplataforma->MaxConexiones=$request->get('MaxConexiones');
      $accesosplataforma->LoginAcceso=$request->get('LoginAcceso');
      $accesosplataforma->ContrasnaPlataforma=$request->get('ContrasnaPlataforma');
      $accesosplataforma->ContrasenaComados=$request->get('ContrasenaComados');
      $accesosplataforma->FchMod=Carbon::now();
      $accesosplataforma->WksMod=$request->ip();
      $accesosplataforma->UsrMod=$request->get('UsrMod');
      $accesosplataforma->FlgEli=1;
      $accesosplataforma->EstadoAcceso=$request->get('EstadoAcceso');
      $accesosplataforma->update();
      return Redirect::to('plataforma/AccesosPlataforma');
    }
    public function destroy($id){
      $accesosplataforma=AccesosPlataforma::findOrFail($id);
			$accesosplataforma->FlgEli='0';
			$accesosplataforma->update();
			return Redirect::to('plataforma/AccesosPlataforma');
    }
}
