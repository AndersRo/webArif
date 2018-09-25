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
        ->where ('FlgEli','=','1')
        ->orderBy('IdDispositivo','desc')
        ->paginate(7);
        return view ('dispositivos.index',["dispositivos"=>$dispositivos,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("dispositivos.create");
    }
    public function store(DispositivosFormRequest $request){
      $dispositivos=new dispositivos;
      $dispositivos->Serie=$request->get('Serie');
      $dispositivos->IMEI=$request->get('IMEI');
      $dispositivos->IdModelo=$request->get('IdModelo');
      $dispositivos->NroSim=$request->get('NroSim');
      $dispositivos->NroIDN=$request->get('NroIDN');
      $dispositivos->IdEmpresa=$request->get('IdEmpresa');
      $dispositivos->save;

      return Redirect::to('dispositivos');
    }
    public function show($id){
      return view("dispositivos.show", ["dispositivos"=>dispositivos::findOrFail($id)]);
    }
    public function edit($id){
      return view("dispositivos.edit", ["dispositivos"=>dispositivos::findOrFail($id)]);
    }
    public function update(DispositivosFormRequest $request,$id){
      $dispositivos=dispositivos::findOrFail($id);
      $dispositivos->Serie=$request->get('Serie');
      $dispositivos->IMEI=$request->get('IMEI');
      $dispositivos->IdModelo=$request->get('IdModelo');
      $dispositivos->NroSim=$request->get('NroSim');
      $dispositivos->NroIDN=$request->get('NroIDN');
      $dispositivos->IdEmpresa=$request->get('IdEmpresa');
      $dispositivos->update();
      return Redirect::to('dispositivo');
    }
    public function destroy($id){
    $dispositivos=Dispositivos::findOrFail($id);
    $dispositivos->FlgEli='0';
    $dispositivos->update();
    return Redirect::to('dispositivo');
    }
}
