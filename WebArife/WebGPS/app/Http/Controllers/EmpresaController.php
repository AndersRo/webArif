<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\carbon;
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
        ->where('FlgEli','=','0')
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
      $empresa->UsrCrea=$request->get('UsrCrea');
      $empresa->WksCrea=$request->ip();
      $empresa->FchCrea=Carbon::now();
      $empresa->FchMod=Carbon::now();
      $empresa->UsrMod=$request->get('UsrMod');
      $empresa->WksMod=$request->ip();
      $empresa->FlgEli=0;
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
      $empresa->RUC=$request->get('RUC');
      $empresa->RazonSocial=$request->get('RazonSocial');
      $empresa->NombreComercial=$request->get('NombreComercial');
      if (Input::hasFile('RutaLogo')) {
        $file=Input::file('RutaLogo');
        $file->move(public_path().'/imagenes/empresa/',$file->getClientOriginalName());
        $empresa->RutaLogo=$file->getClientOriginalName();
      }
      $empresa->FchMod=Carbon::now();
      $empresa->UsrMod=$request->get('UsrMod');
      $empresa->WksMod=$request->ip();
      $empresa->Representante=$request->get('Representante');
      $empresa->update();
      return Redirect::to('datos/empresa');
    }
    public function destroy($id){
       $empresa=Empresa::findOrFail($id);
       $empresa->FlgEli='1';
       $empresa->update();
       return Redirect::to('datos/empresa');
    }
}
