<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        return view ('plataforma.AccesoPlataformaDetalle.index',["accesoplataformadetalle"=>$accesoplataformadetalle,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("plataforma.AccesoPlataformaDetalle.create");
    }
    public function store(AccesoPlataformaDetalleFormRequest $request){
      $accesoplataformadetalle=new accesoplataformadetalle;
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->FchCrea=Carbon::now();
      $accesoplataformadetalle->UsrCrea=$request->get('UsrCrea');
      $accesoplataformadetalle->WksCrea=$request->get('WksCrea');
      $accesoplataformadetalle->FchMod=Carbon::now();
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->get('WksMod');
      $accesoplataformadetalle->FlgEli=1;
      $accesoplataformadetalle->save();
      return Redirect::to('plataforma/AccesoPlataformaDetalle');
    }
    public function show($id){
      return view("plataforma.AccesoPlataformaDetalle.show", ["accesoplataformadetalle"=>AccesoPlataformaDetalle::findOrFail($id)]);
    }
    public function edit($id){
      return view("plataforma.AccesoPlataformaDetalle.edit", ["accesoplataformadetalle"=>AccesoPlataformaDetalle::findOrFail($id)]);
    }
    public function update(AccesoPlataformaDetalleFormRequest $request,$id){
      $accesoplataformadetalle=AccesoPlataformaDetalle::findOrFail($id);
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->UsrCrea=$request->get('UsrCrea');
      $accesoplataformadetalle->WksCrea=$request->get('WksCrea');
      $accesoplataformadetalle->FchMod=Carbon::now();
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->get('WksMod');
      $accesoplataformadetalle->FlgEli=$request->get('FlgEli');
      $accesoplataformadetalle->update();
      return Redirect::to('plataforma/AccesoPlataformaDetalle');
    }
    public function destroy($id){
      $accesoplataformadetalle=AccesoPlataformaDetalle::findOrFail($id);
			$accesoplataformadetalle->FlgEli='0';
			$accesoplataformadetalle->update();
			return Redirect::to('plataforma/AccesoPlataformaDetalle');
    }
}
