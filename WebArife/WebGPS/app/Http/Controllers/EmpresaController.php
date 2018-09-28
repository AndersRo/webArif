<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Empresa;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\EmpresaFormRequest;
use DB;

class EmpresaController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $empresa=DB::table('empresa')->where('RazonSocial','LIKE','%'.$query.'%')
        ->where('FlgEli','=','1')
        ->orderBy('IdEmpresa','desc')
        ->paginate(7);
        return view ('empresa.index',["empresa"=>$empresa,"searchText"=>$query]);
      }
    }
    public function create(){

      return view("empresa.create");

    }
    public function store(EmpresaFormRequest $request){

      $empresa=new empresa;
      $empresa->RUC=$request->get('RUC');
      $empresa->RazonSocial=$request->get('RazonSocial');
      $empresa->NombreComercial=$request->get('NombreComercial');
      $empresa->RutaLogo=$request->get('RutaLogo');
      $empresa->UsrCrea=$request->get('UsrCrea');
      $empresa->WksCrea=$request->get('WksCrea');
      $empresa->FchCrea=$request->get('FchCrea');
      $empresa->FchMod=$request->get('FchMod');
      $empresa->UsrMod=$request->get('UsrMod');
      $empresa->WksMod=$request->get('WksMod');
      $empresa->FlgEli=$request->get('FlgEli');
      $empresa->Respresentante=$request->get('Respresentante');
      $empresa->sav e();

      return Redirect::to('empresa');

    }

    public function show($id){
      return view("empresa.show", ["empresa"=>empresa::findOrFail($id)]);
    }
    public function edit($id){
      return view("empresa.edit", ["empresa"=>empresa::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id){
      $empresa=empresa::findOrFail($id);
      $empresa->RUC=$request->get('RUC');
      $empresa->RazonSocial=$request->get('RazonSocial');
      $empresa->NombreComercial=$request->get('NombreComercial');
      $empresa->RutaLogo=$request->get('RutaLogo');
      $empresa->UsrCrea=$request->get('UsrCrea');
      $empresa->WksCrea=$request->get('WksCrea');
      $empresa->FchCrea=$request->get('FchCrea');
      $empresa->FchMod=$request->get('FchMod');
      $empresa->UsrMod=$request->get('UsrMod');
      $empresa->WksMod=$request->get('WksMod');
      $empresa->FlgEli=$request->get('FlgEli');
      $empresa->Respresentante=$request->get('Respresentante');
      $empresa->update();
      return Redirect::to('empresa');
    }
    public function destroy($id){
       $empresa=Empresa::findOrFail($id);
       $empresa->FlgEli='0';
       $empresa->update();
       return Redirect::to('empresa');
    }
}
