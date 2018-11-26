<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\AccesoPlataformaDetalleFormRequest;
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
        ->where('FlgEli','=','0')
        ->orderBy('IdAccesoDetalle','desc')
        ->paginate(7);
        return view ('plataforma.AccesoPlataformaDetalle.index',["accesoplataformadetalle"=>$accesoplataformadetalle,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("plataforma.AccesoPlataformaDetalle.create");
    }
    public function store(AccesoPlataformaDetalleFormRequest $request){
      $accesoplataformadetalle=new AccesoPlataformaDetalle;
      $accesoplataformadetalle->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->FchCrea=Carbon::now();
      $accesoplataformadetalle->UsrCrea=$request->get('UsrCrea');
      $accesoplataformadetalle->WksCrea=$request->ip();
      $accesoplataformadetalle->FchMod=Carbon::now();
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->ip();
      $accesoplataformadetalle->FlgEli=0;
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
      $accesoplataformadetalle->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformadetalle->IdAcceso=$request->get('IdAcceso');
      $accesoplataformadetalle->IdContrato=$request->get('IdContrato');
      $accesoplataformadetalle->FchMod=Carbon::now();
      $accesoplataformadetalle->UsrMod=$request->get('UsrMod');
      $accesoplataformadetalle->WksMod=$request->ip();
      $accesoplataformadetalle->FlgEli=0;
      $accesoplataformadetalle->update();
      return Redirect::to('plataforma/AccesoPlataformaDetalle');
    }
    public function destroy($id){
      $accesoplataformadetalle=AccesoPlataformaDetalle::findOrFail($id);
			$accesoplataformadetalle->FlgEli='1';
			$accesoplataformadetalle->update();
			return Redirect::to('plataforma/AccesoPlataformaDetalle');
    }
}
