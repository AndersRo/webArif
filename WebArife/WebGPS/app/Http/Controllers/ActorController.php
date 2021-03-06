<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use Carbon\carbon;
use webGps\Actor;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ActorFormRequest;
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
        ->where('FlgEli','=','0')
        ->orderBy('IdActor','desc')
        ->paginate(7);
        return view ('datos/actor.index',["actor"=>$actor,"searchText"=>$query]);
      }
    }
    public function create(){
      $empresa=DB::table('empresa')
			->where('FlgEli','=','0')->get();
      return view("datos/actor.create",["empresa"=>$empresa]);
    }

    public function store(ActorFormRequest $request){
      $actor=new Actor;
      $actor->IdActor=$request->get('IdActor');
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
      $actor->FchCrea=Carbon::now();
      $actor->UsrCrea=$request->get('UsrCrea');
      $actor->WksCrea=$request->ip();
      $actor->FchMod=Carbon::now();
      $actor->WksMod=$request->ip();
      $actor->UsrMod=$request->get('UsrMod');
      $actor->FlgEli=1;
      $actor->save();
      return Redirect::to('datos/actor');
    }
    public function show($id){
      return view("datos.actor.show",["actor"=>Actor::findOrFail($id)]);
    }
    public function edit($id){
      $empresa=DB::table('empresa')
			->where('FlgEli','=','0')->get();
      return view("datos.actor.edit",["actor"=>Actor::findOrFail($id)],["empresa"=>$empresa]);
    }
    public function update(ActorFormRequest $request, $id){
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
      $actor->FchMod=Carbon::now();
      $actor->WksMod=$request->ip();
      $actor->UsrMod=$request->get('UsrMod');
      $actor->update();
      return Redirect::to('datos/actor');
    }
    public function destroy($id){
      $actor=Actor::findOrFail($id);
			$actor->FlgEli='1';
			$actor->update();
			return Redirect::to('datos/actor');
    }

}
