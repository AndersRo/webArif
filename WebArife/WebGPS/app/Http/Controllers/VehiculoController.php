<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Vehiculo;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\VehiculoFormRequest;
use DB;

class VehiculoController extends Controller
{
    public function __construc(){
}
public function index(Request $request){
   if ($request) {
   $query=trim($request->get('searchText'));
   $vehiculo=DB::table('vehiculo')->where('UsrCrea','LIKE','%'.$query.'%')
  ->where('FlgEli','=','1')
  ->orderBy('IdVehiculo','desc')
  ->paginate(7);
  return view ('datos/vehiculo.index',["vehiculo"=>$vehiculo,"searchText"=>$query]);
}
}
public function create(){
  return view("datos/vehiculo.create");
}
public function store(VehiculoFormRequest $request){
  $vehiculo=new Vehiculo;
  $vehiculo->IdVehiculo=$request->get('IdVehiculo');
  $vehiculo->Placa=$request->get('Placa');
  $vehiculo->Chasis=$request->get('Chasis');
  $vehiculo->Motor=$request->get('Motor');
  $vehiculo->Modelo=$request->get('Modelo');
  $vehiculo->Color=$request->get('Color');
  $vehiculo->FchCrea=$request->get('FchCrea');
  $vehiculo->UsrCrea=$request->get('UsrCrea');
  $vehiculo->WksCrea=$request->get('WksCrea');
  $vehiculo->FchMod=$request->get('FchMod');
  $vehiculo->UsrMod=$request->get('UsrMod');
  $vehiculo->WksMod=$request->get('WksMod');
  $vehiculo->FlgEli=1;
  $vehiculo->RutaReferencia=$request->get('RutaReferencia');
  $vehiculo->RutaTarjeta=$request->get('RutaTarjeta');
  $vehiculo->IdEmpresa=$request->get('IdEmpresa');
  $vehiculo->save();
  return Redirect::to('datos/vehiculo');
}
public function show($id){
  return view("datos/vehiculo.show", ["vehiculo"=>Vehiculo::findOrFail($id)]);
}
public function edit($id){
  return view("datos/vehiculo.edit", ["vehiculo"=>Vehiculo::findOrFail($id)]);
}
public function update(VehiculoFormRequest $request,$id){
  $vehiculo=Vehiculo::findOrFail($id);
  $vehiculo->IdVehiculo=$request->get('IdVehiculo');
  $vehiculo->Placa=$request->get('Placa');
  $vehiculo->Chasis=$request->get('Chasis');
  $vehiculo->Motor=$request->get('Motor');
  $vehiculo->Modelo=$request->get('Modelo');
  $vehiculo->Color=$request->get('Color');
  $vehiculo->FchCrea=$request->get('FchCrea');
  $vehiculo->UsrCrea=$request->get('UsrCrea');
  $vehiculo->WksCrea=$request->get('WksCrea');
  $vehiculo->FchMod=$request->get('FchMod');
  $vehiculo->UsrMod=$request->get('UsrMod');
  $vehiculo->WksMod=$request->get('WksMod');
  $vehiculo->FlgEli=$request->get('FlgEli');
  $vehiculo->RutaReferencia=$request->get('RutaReferencia');
  $vehiculo->RutaTarjeta=$request->get('RutaTarjeta');
  $vehiculo->IdEmpresa=$request->get('IdEmpresa');
  $vehiculo->update();
  return Redirect::to('datos/vehiculo');
}
public function destroy($id){
  $vehiculo=vehiculo::findOrFail($id);
  $vehiculo->FlgEli='0';
  $vehiculo->update();
  return Redirect::to('datos/vehiculo');
  }
}
