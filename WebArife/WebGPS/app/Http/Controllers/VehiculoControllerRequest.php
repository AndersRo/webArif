<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\ Vehiculo;
use Illuminate\Support\Facades\Redirect;


use webGps\Http\Request\VehiculoFormRequest;
use DB;

class VehiculoControllerRequest extends Controller
{
    public function __ construc(){
}
public function index(Request $request){
   if ($request) {
   $query=trim($request->get('searchText'));
   $vehiculo=DB::table('vehiculo')->where('UsrCrea','LIKE','%'.$query.'%')
  ->where('FlgEli','=','1')
  ->orderBy('IdVehiculo','desc')
  ->paginate(7);
  return view ('vehiculo.index',["vehiculo"=>$vehiculo,"searchText"=>$query]);
}
}
public function create(){
return view("vehiculo.create");
}
public function store(vehiculoFormRequest $request){



$vehiculo=new vehiculo;
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
$vehiculo->save;
return Redirect::to('Vehiculo');
}
public function show($id){
return view("vehiculo.show", ["vehiculo"=>vehiculo::findOrFail($id)]);
}
public function edit($id){
return view("vehiculo.edit", ["vehiculo"=>vehiculo::findOrFail($id)]);
}
public function update(VehiculoFormRequest $request,$id){
$vehiculo=vehiculo::findOrFail($id);
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
return Redirect::to('vehiculo');
}
public function destroy($id){
$vehiculo=vehiculo::findOrFail($id);
$vehiculo->FlgEli='0';
$vehiculo->update();
return Redirect::to('vehiculo');
  }
}
