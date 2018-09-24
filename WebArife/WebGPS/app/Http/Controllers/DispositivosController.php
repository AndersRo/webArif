<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Dispositivos;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\DispositivosFormRequest;
use DB;

class DispositivosController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $dispositivo=DB::table('dispositivo')->where('NroSim','LIKE','%'.$query.'%')
        ->where ('FlgEli','=','1')
        ->orderBy('IdDispositivo','desc')
        ->paginate(7);
        return view ('dispositivo.index',["dispositivo"=>$dispositivo,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("dispositivo.create");
    }
    public function store(DispositivosFormRequest $request){
      $dispositivo=new dispositvo;
      $dispositivo->Serie=$request->get(Serie'');
      $dispositivo->IMEI=$request->get('IMEI');
      $dispositivo->idModelo=$request->get('idModelo');
      $dispositivo->NroSim=$request->get('NroSim');
      $dispositivo->NroIDN=$request->get('NroIDN');
      $dispositivo->idEmpresa=$request->get('idEmpresa');
      $dispositivo->save;

      return Redirect::to('dispositivo');
    }
    public function show($id){2
      return view("dispositivo.show", ["dispositivo"=>"dispositivo"::findOrFail($id)]);
    }
    public function edit($id){
      return view("dispositivo.edit", ["dispositivo"=>dispositvo::findOrFail($id)]);
    }
    public function update(dispositivoFormRequest $request,$id){
      $dispositivo=dispositivo::findOrFail($id);
      $dispositivo->Serie=$request->get('Serie');
      $dispositivo->IMEI=$request->get('IMEI');
      $dispositivo->idModelo=$request->get('idModelo');
      $dispositivo->NroSim=$request->get('NroSim');
      $dispositivo->NroIDN=$request->get('NroIDN');
      $dispositivo->idEmpresa=$request->get('idEmpresa');
      $dispositivo->update();
      return Redirect::to('dispositivo');
    }
    public function destroy($id){
    $dispositivo=Dispositivos::findOrFail($id);
    $dispositivo->FlgEli='0';
    $dispositivo->update();
    return Redirect::to('dispositivo');
    }
}
