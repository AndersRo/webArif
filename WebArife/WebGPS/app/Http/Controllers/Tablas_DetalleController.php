<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\Tablas_Detalle;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\Tablas_DetalleFormRequest;
use DB;

class Tablas_DetalleController extends Controller
{
    public function __construct(){
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $tablas_detalle=DB::table('tablas_detalle')->where('UsrCrea','LIKE','%'.$query.'%')
    ->where('FlgEli','=','0')
    ->orderBy('IdTablaDetalle','desc')
    ->paginate(7);
    return view ('tablas/tablas_detalle.index',["tablas_detalle"=>$tablas_detalle,"searchText"=>$query]);
  }
}
public function create(){
  return view("tablas/tablas_detalle.create");
}
public function store(Tablas_DetalleFormRequest $request){
  $tablas_detalle=new Tablas_Detalle;
  $tablas_detalle->IdTablaDetalle=$request->get('IdTablaDetalle');
  $tablas_detalle->IdTabla=$request->get('IdTabla');
  $tablas_detalle->Descripcion=$request->get('Descripcion');
  $tablas_detalle->FchCrea=FchCrea=Carbon::now();
  $tablas_detalle->UsrCrea=$request->get('UsrCrea');
  $tablas_detalle->WksCrea=$request->get('WksCrea');
  $tablas_detalle->FchMod=FchCrea=Carbon::now();
  $tablas_detalle->UsrMod=$request->get('UsrMod');
  $tablas_detalle->WksMod=$request->get('WksMod');
  $tablas_detalle->FlgEli=0;
  $tablas_detalle->save();
  return Redirect::to('tablas/tablas_detalle');
}
public function show($id){
  return view("tablas/tablas_detalle.show", ["tablas_Detalle"=>Tablas_Detalle::findOrFail($id)]);
}
public function edit($id){
  return view("tablas/tablas_detalle.edit", ["tablas_Detalle"=>Tablas_Detalle::findOrFail($id)]);
}
public function update(Tablas_DetalleFormRequest $request,$id){
  $tablas_detalle=Tablas_Detalle::findOrFail($id);
  $tablas_detalle->IdTablaDetalle=$request->get('IdTablaDetalle');
  $tablas_detalle->IdTabla=$request->get('IdTabla');
  $tablas_detalle->Descripcion=$request->get('Descripcion');
  $tablas_detalle->FchMod=Carbon::now();
  $tablas_detalle->UsrMod=$request->get('UsrMod');
  $tablas_detalle->WksMod=$request->get('WksMod');
  $tablas_detalle->FlgEli=0;
  $tablas_detalle->update();
  return Redirect::to('tablas/tablas_detalle');
  }
public function destroy($id){
  $tablas_detalle=tablas_detalle::findOrFail($id);
  $tablas_detalle->FlgEli='1';
  $tablas_detalle->update();
  return Redirect::to('tablas/tablas_detalle');
  }
}
