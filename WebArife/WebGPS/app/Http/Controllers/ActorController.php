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
        $actor=DB::table('actor as a')
        ->join('cliente as c', 'a.IdCliente','=', 'c.IdCliente')
        ->select('a.IdActor', 'a.PrimerNombre', 'a.Apellido_Paterno', 'a.RUC', 'c.FchCrea')
        ->where('a.UsrCrea','LIKE','%'.$query.'%')
        ->orderBy('IActor','desc')
        ->paginate(7);
        return view ('actor.index',["actor"=>$actor,"searchText"=>$query]);
      }
    }
    public function create(){
      return view("actor.create");
    }
    public function store(ActorFormRequest $request){
      $actor=new actor;
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
      return Redirect::to('cliente');
    }
    public function show($id){
      return view("cliente.show", ["cliente"=>cliente::findOrFail($id)]);
    }
    public function edit($id){
      return view("cliente.edit", ["cliente"=>cliente::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id){
      $cliente=cliente::findOrFail($id);
      $cliente->FchCrea=$request->get('FchCrea');
      $cliente->UsrCrea=$request->get('UsrCrea');
      $cliente->WksCrea=$request->get('WksCrea');
      $cliente->FchMod=$request->get('FchMod');
      $cliente->UsrMod=$request->get('UsrMod');
      $cliente->WksMod=$request->get('WksMod');
      $cliente->FglEli=$request->get('FglEli');
      $categoria->update();
      return Redirect::to('cliente');
    }
    public function destroy($id){

    }
}
