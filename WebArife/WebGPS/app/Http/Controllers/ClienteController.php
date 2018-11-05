<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\carbon;
use webGps\Http\Requests;
use webGps\Cliente;
use webGps\Actor;
use webGps\Empresa;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ClienteFormRequest;
use webGps\Http\Requests\ActorFormRequest;
use webGps\Http\Requests\EmpresaFormRequest;
use DB;

class ClienteController extends Controller
{
	public function __construct(){
}
    public function index(Request $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$cliente=DB::table('cliente as c')
				->join('actor as a', 'c.IdActor','=','a.IdActor')
				->select('c.IdCliente','a.Apellido_Paterno','a.Apellido_Materno' ,'a.PrimerNombre','a.TipoDocumento','a.CodigoIdentificacion','a.RazonSocial')
				->where('a.PrimerNombre','LIKE','%'.$query.'%')
				->where('c.FlgEli','=','1')
				->orwhere('a.CodigoIdentificacion','LIKE','%'.$query.'%')
				->where('a.FlgEli','=','1')
    		->orderBy('c.IdCliente','desc')
				->paginate(7);
    		return view ('datos/cliente.index',["cliente"=>$cliente,"searchText"=>$query]);
    	}

    }
    public function create(){
			$actor=DB::table('actor')
			->where('FlgEli','=','1')->get();
			$empresa=DB::table('empresa')
			->where('FlgEli','=','1')->get();
    	return view("datos/cliente.create",["actor"=>$actor],["empresa"=>$empresa]);
    }
		/*public function create(){
			$empresa=DB::table('empresa')
			->where('FlgEli','=','1')->get($empresa);
		}*/
    public function store(ClienteFormRequest $request, ActorFormRequest $reqactor){
			$actor=new Actor;
			$actor->IdActor=$reqactor->get('IdActor');
			$actor->TipoPersona=$reqactor->get('TipoPersona');
			$actor->Apellido_Paterno=$reqactor->get('Apellido_Paterno');
			$actor->Apellido_Materno=$reqactor->get('Apellido_Materno');
			$actor->PrimerNombre=$reqactor->get('PrimerNombre');
			$actor->SegundoNombre=$reqactor->get('SegundoNombre');
			$actor->RazonSocial=$reqactor->get('RazonSocial');
			$actor->TipoDocumento=$reqactor->get('TipoDocumento');
			$actor->CodigoIdentificacion=$reqactor->get('CodigoIdentificacion');
			$actor->RUC=$reqactor->get('RUC');
			$actor->IdEmpresa=$reqactor->get('IdEmpresa');
			$actor->FchCrea=Carbon::now();
			$actor->UsrCrea=$reqactor->get('UsrCrea');
			$actor->WksCrea=$reqactor->ip();
			$actor->FchMod=Carbon::now();
			$actor->WksMod=$reqactor->ip();
			$actor->UsrMod=$reqactor->get('UsrMod');
			$actor->FlgEli=1;
			$actor->save();

			$cliente=new Cliente;
			$cliente->IdCliente=$request->get('IdCliente');
			$cliente->IdActor=$request->get('IdActor');
    	$cliente->FchCrea=Carbon::now();
    	$cliente->UsrCrea=$request->get('UsrCrea');
    	$cliente->WksCrea=$request->ip();
    	$cliente->FchMod=Carbon::now();
			$cliente->WksMod=$request->ip();
    	$cliente->UsrMod=$request->get('UsrMod');
			$cliente->FlgEli=1;
			$cliente->save();
    	return Redirect::to('datos/cliente');
    }
    public function show($id){
    	return view("datos/cliente.show", ["cliente"=>Cliente::findOrFail($id)]);
    }
    public function edit($id){
			$actor=DB::table('cliente as c')
			->join('actor as a','c.IdActor','=','a.IdActor')
			->join('empresa as e','e.IdEmpresa','=','a.IdEmpresa')
			->where('c.IdCliente','=',($id))->get();
			//->where('a.FlgEli','=','1')->get();
    	return view("datos/cliente.edit", ["actor"=>$actor], ["cliente"=>Cliente::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id){
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

			$cliente=Cliente::findOrFail($id);
			$cliente->IdActor=$request->get('IdActor');
    	$cliente->FchMod=Carbon::now();
			$cliente->WksMod=$request->ip();
    	$cliente->UsrMod=$request->get('UsrMod');
    	$cliente->update();
    	return Redirect::to('datos/cliente');
    }
    public function destroy($id){
			$cliente=Cliente::findOrFail($id);
			$cliente->FlgEli='0';
			$cliente->update();

			$actor=Actor::findOrFail($id);
			$actor->FlgEli='0';
			$actor->update();

			return Redirect::to('datos/cliente');
    }
}
