<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\carbon;
use webGps\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\AccesoPlataformaComandosFormRequest;
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
        return view ('plataforma.AccesoPlataformaComandos.index',["accesoplataformacomandos"=>$accesoplataformacomandos,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("plataforma.AccesoPlataformaComandos.create");
    }
    public function store(AccesoPlataformaComandosFormRequest $request){
      $accesoplataformacomandos=new AccesoPlataformaComandos;
      $accesoplataformacomandos->IdAccesoComandos=$request->get('IdAccesoComandos');
      $accesoplataformacomandos->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformacomandos->FchCrea=Carbon::now();
      $accesoplataformacomandos->UsrCrea=$request->get('UsrCrea');
      $accesoplataformacomandos->WksCrea=$request->get('WksCrea');
      $accesoplataformacomandos->FchMod=Carbon::now();
      $accesoplataformacomandos->UsrMod=$request->get('UsrMod');
      $accesoplataformacomandos->WksMod=$request->get('WksMod');
      $accesoplataformacomandos->FlgEli=1;
      $accesoplataformacomandos->save();
      return Redirect::to('plataforma/AccesoPlataformaComandos');
    }
    public function show($id){
      return view("plataforma.AccesoPlataformaComandos.show", ["accesoplataformacomandos"=>AccesoPlataformaComandos::findOrFail($id)]);
    }
    public function edit($id){
      return view("plataforma.AccesoPlataformaComandos.edit", ["accesoplataformacomandos"=>AccesoPlataformaComandos::findOrFail($id)]);
    }
    public function update(AccesoPlataformaComandosFormRequest $request,$id){
      $accesoplataformacomandos=AccesoPlataformaComandos::findOrFail($id);
      $accesoplataformacomandos->IdAccesoComandos=$request->get('IdAccesoComandos');
      $accesoplataformacomandos->IdAccesoDetalle=$request->get('IdAccesoDetalle');
      $accesoplataformacomandos->FchMod=Carbon::now();
      $accesoplataformacomandos->UsrMod=$request->get('UsrMod');
      $accesoplataformacomandos->WksMod=$request->ip();
      $accesoplataformacomandos->FlgEli=1;
      $accesoplataformacomandos->update();
      return Redirect::to('plataforma/AccesoPlataformaComandos');
    }
    public function destroy($id){
      $accesoplataformacomandos=AccesoPlataformaComandos::findOrFail($id);
			$accesoplataformacomandos->FlgEli='0';
			$accesoplataformacomandos->update();
			return Redirect::to('plataforma/AccesoPlataformaComandos');
    }
  }
