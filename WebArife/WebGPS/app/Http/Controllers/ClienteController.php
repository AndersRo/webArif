<?php

namespace webGps\Http\Controllers;

use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\app\Cliente;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Request\ClienteFormRequest;
use DB;

class ClienteController extends Controller
{
	public function __construct(){

	}
    public function index(Request $request){
    	if ($request) {
    		$query=trim($request->get('searchText'));
    		$cliente=DB::table('cliente')->where('UsrCrea','LIKE','%'.$query.'%')

    		->orderBy('IdCliente','desc')
    		->paginate(7);
    		return view ('cliente.index',["cliente"=>$cliente,"searchText"=>$query]);
    	}
    }
    public function create(){
    	return view("cliente.create");
    }
    public function store(ClienteFormRequest $request){
    	$cliente=new cliente;
    	$cliente->FchCrea=$request->get('FchCrea');
    	$cliente->UsrCrea=$request->get('UsrCrea');
    	$cliente->WksCrea=$request->get('WksCrea');
    	$cliente->FchMod=$request->get('FchMod');
    	$cliente->UsrMod=$request->get('UsrMod');
    	$cliente->WksMod=$request->get('WksMod');
    	$cliente->FglEli=$request->get('FglEli');
    	$cliente->save;
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
    	$cliente->update();
    	return Redirect::to('cliente');
    }
    public function destroy($id){

    }
}
