<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Empresa;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
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
        return view ('datos/empresa.index',["empresa"=>$empresa,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("datos/empresa.create");

    }
    public function store(EmpresaFormRequest $request){
      $empresa=new Empresa;
      $empresa->IdEmpresa=$request->get('IdEmpresa');
      $empresa->RUC=$request->get('RUC');
      $empresa->RazonSocial=$request->get('RazonSocial');
      $empresa->NombreComercial=$request->get('NombreComercial');
      if (Input::hasFile('RutaLogo')) {
        $file=Input::file('RutaLogo');
        $file->move(public_path().'/imagenes/empresa/',$file->getClientOriginalName());
        $empresa->RutaLogo=$file->getClientOriginalName();
      }
      //$empresa->RutaLogo=$request->get('RutaLogo');
      $empresa->UsrCrea=$request->get('UsrCrea');
      $empresa->WksCrea=$request->get('WksCrea');
      $empresa->FchCrea=$request->get('FchCrea');
      $empresa->FchMod=$request->get('FchMod');
      $empresa->UsrMod=$request->get('UsrMod');
      $empresa->WksMod=$request->get('WksMod');
      $empresa->FlgEli=1;
      $empresa->Representante=$request->get('Representante');
      $empresa->save();
      return Redirect::to('datos/empresa');

    }

    public function show($id){
      return view("datos/empresa.show", ["empresa"=>Empresa::findOrFail($id)]);
    }
    public function edit($id){
      return view("datos/empresa.edit", ["empresa"=>Empresa::findOrFail($id)]);
    }
    public function update(EmpresaFormRequest $request,$id){
      $empresa=Empresa::findOrFail($id);
      $empresa->IdEmpresa=$request->get('IdEmpresa');
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
      $empresa->Representante=$request->get('Representante');
      $empresa->update();
      return Redirect::to('datos/empresa');
    }
    public function destroy($id){
       $empresa=empresa::findOrFail($id);
       $empresa->FlgEli='0';
       $empresa->update();
       return Redirect::to('datos/empresa');
    }
}
