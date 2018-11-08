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
        $dispositivos=DB::table('dispositivos')->where('IMEI','LIKE','%'.$query.'%')
        ->orderBy('IdDispositivo','desc')
        ->paginate(7);
        return view ('Dispositivos/dispositivo.index',["dispositivos"=>$dispositivos,"searchText"=>$query]);
      }
    }
    public function create(){
      $modelo=DB::table('modelo')
			->where('FlgEli','=','1')->get();
      $empresa=DB::table('empresa')
			->where('FlgEli','=','1')->get();
      return view("Dispositivos/dispositivo.create",["modelo"=>$modelo,"empresa"=>$empresa]);
    }
    public function store(DispositivosFormRequest $request){
      $dispositivos=new Dispositivos;
      $dispositivos->IdDispositivo=$request->get('IdDispositivo');
      $dispositivos->Serie=$request->get('Serie');
      $dispositivos->IMEI=$request->get('IMEI');
      $dispositivos->IdModelo=$request->get('IdModelo');
      $dispositivos->NroSim=$request->get('NroSim');
      $dispositivos->NroIDN=$request->get('NroIDN');
      $dispositivos->IdEmpresa=$request->get('IdEmpresa');
      $dispositivos->save();
      return Redirect::to('Dispositivos/dispositivo');
    }
    public function show($id){
      return view("Dispositivos/dispositivo.show", ["dispositivo"=>Dispositivos::findOrFail($id)]);
    }
    public function edit($id){
      return view("Dispositivos/dispositivo.edit", ["dispositivo"=>Dispositivos::findOrFail($id)]);
    }
    public function update(DispositivosFormRequest $request,$id){
      $dispositivos=Dispositivos::findOrFail($id);
      $dispositivos->IdDispositivo=$request->get('IdDispositivo');
      $dispositivos->Serie=$request->get('Serie');
      $dispositivos->IMEI=$request->get('IMEI');
      $dispositivos->IdModelo=$request->get('IdModelo');
      $dispositivos->NroSim=$request->get('NroSim');
      $dispositivos->NroIDN=$request->get('NroIDN');
      $dispositivos->IdEmpresa=$request->get('IdEmpresa');
      $dispositivos->update();
      return Redirect::to('Dispositivos/dispositivo');
    }
    public function destroy($id){
      $dispositivos=Dispositivos::findOrFail($id);
			$dispositivos->FlgEli='0';
			$dispositivos->update();
			return Redirect::to('datos/cliente');
    }
}
