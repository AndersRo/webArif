<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;

use webGps\Http\Requests;
use webGps\Cliente;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\ClienteFormRequest;
use DB;

class ClienteController extends Controller
{
	public function __construct(){
}
    public function index(Request $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$cliente=DB::table('cliente')->where('UsrCrea','LIKE','%'.$query.'%')
				->where('FlgEli','=','1')
    		->orderBy('IdCliente','desc')
    		->paginate(7);
    		return view ('datos/cliente.index',["cliente"=>$cliente,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view("datos/cliente.create");
    }
    public function store(ClienteFormRequest $request){
    	$cliente=new Cliente;
			$cliente->IdCliente=$request->get('IdCliente');
			$cliente->IdActor=$request->get('IdActor');
    	$cliente->FchCrea=$request->get('FchCrea');
    	$cliente->UsrCrea=$request->get('UsrCrea');
    	$cliente->WksCrea=$request->get('WksCrea');
    	$cliente->FchMod=$request->get('FchMod');
			$cliente->WksMod=$request->get('WksMod');
    	$cliente->UsrMod=$request->get('UsrMod');
    	$cliente->FlgEli=1;
    	$cliente->save();
    	return Redirect::to('datos/cliente');
    }
    public function show($id){
    	return view("datos/cliente.show", ["cliente"=>Cliente::findOrFail($id)]);
    }
    public function edit($id){
    	return view("datos/cliente.edit", ["cliente"=>Cliente::findOrFail($id)]);
    }
    public function update(ClienteFormRequest $request,$id){
    	$cliente=Cliente::findOrFail($id);
			$cliente->IdActor=$request->get('IdActor');
    	$cliente->FchCrea=$request->get('FchCrea');
    	$cliente->UsrCrea=$request->get('UsrCrea');
    	$cliente->WksCrea=$request->get('WksCrea');
    	$cliente->FchMod=$request->get('FchMod');
			$cliente->WksMod=$request->get('WksMod');
    	$cliente->UsrMod=$request->get('UsrMod');
    	$cliente->update();
    	return Redirect::to('datos/cliente');
    }
    public function destroy($id){
			$cliente=Cliente::findOrFail($id);
			$cliente->FlgEli='0';
			$cliente->update();
			return Redirect::to('datos/cliente');
    }
}
