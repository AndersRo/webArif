<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\input;
use webGps\Http\Requests\ActorFormRequest;
use webGps\Actor;
use DB;

class ActorController extends Controller
{
  public function __construct(){

  }
    public function index(Request $request){
      if ($request) {
        $query=trim($request->get('searchText'));
        $actor=DB::table('actor')
        ->where('TipoPersona','LIKE','%'.$query.'%')
        ->orderBy('IdActor','desc')
        ->paginate(7);
        return view ('datos/actor.index',["actor"=>$actor,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("datos/actor.create");
    }
    public function store(ActorFormRequest $request){
      $actor=new Actor;
      $actor->TipoPersona=$request->get('TipoPersona');
      $actor->Apellido_Paterno=$request->get('Apellido_Paterno');
      $actor->Apellido_Materno=$request->get('Apellido_Materno');
      $actor->PrimerNombre=$request->get('PrimerNombre');
      $actor->SegundoNombre=$request->get('SegundoNombre');
      $actor->RazonSocial=$request->get('RazonSocial');
      $actor->TipoDocumento=$request->get('TipoDocumento');
      $actor->CodigoIdentificacion=$request->get('CodigoIdentificacion');
      $actor->RUC=$request->get('RUC');
      $actor->IdEmpresa=$request->get('IdEmpresa');
      $actor->FchCrea=$request->get('FchCrea');
      $actor->UsrCrea=$request->get('UsrCrea');
      $actor->WksCrea=$request->get('WksCrea');
      $actor->FchMod=$request->get('FchMod');
      $actor->WksMod=$request->get('WksMod');
      $actor->UsrMod=$request->get('UsrMod');
      $actor->FglEli=$request->get('FglEli');
      $actor->save;
      return Redirect::to('datos/actor');
    }
    public function show($id){
      return view("datos/actor.show", ["actor"=>actor::findOrFail($id)]);
    }
    public function edit($id){
      return view("datos/actor.edit", ["actor"=>actor::findOrFail($id)]);
    }
    public function update(ActorFormRequest $request,$id){
      $actor=Actor::findOrFail($id);
      $actor->TipoPersona=$request->get('TipoPersona');
      $actor->Apellido_Paterno=$request->get('Apellido_Paterno');
      $actor->Apellido_Materno=$request->get('Apellido_Materno');
      $actor->PrimerNombre=$request->get('PrimerNombre');
      $actor->SegundoNombre=$request->get('SegundoNombre');
      $actor->RazonSocial=$request->get('RazonSocial');
      $actor->TipoDocumento=$request->get('TipoDocumento');
      $actor->CodigoIdentificacion=$request->get('CodigoIdentificacion');
      $actor->RUC=$request->get('RUC');
      $actor->IdEmpresa=$request->get('IdEmpresa');
      $actor->FchCrea=$request->get('FchCrea');
      $actor->UsrCrea=$request->get('UsrCrea');
      $actor->WksCrea=$request->get('WksCrea');
      $actor->FchMod=$request->get('FchMod');
      $actor->WksMod=$request->get('WksMod');
      $actor->UsrMod=$request->get('UsrMod');
      $actor->FglEli=$request->get('FglEli');
      $actor->update();
      return Redirect::to('datos/actor');
    }
    public function destroy($id){

    }
}
