<?php

namespace webGps\Http\Controllers;

use Carbon\carbon;
use Illuminate\Http\Request;
use webGps\Http\Requests;
use webGps\Mecanico;
use webGps\Actor;
use Illuminate\Support\Facades\Redirect;
use webGps\Http\Requests\MecanicoFormRequest;
use webGps\Http\Requests\ActorFormRequest;
use DB;
use Excel;

class MecanicoController extends Controller
{
    public function __construct(){    //
}
public function index(Request $request){
  if ($request) {
    $query=trim($request->get('searchText'));
    $mecanico=DB::table('mecanico as m')
    ->join('actor as a', 'm.IdActor','=','a.IdActor')
    ->select('m.IdMecanico','a.IdActor','a.Apellido_Paterno','a.Apellido_Materno' ,'a.PrimerNombre','a.TipoDocumento','a.CodigoIdentificacion','a.RazonSocial')
    ->where('a.PrimerNombre','LIKE','%'.$query.'%')
    ->where ('m.FlgEli','=','1')
    ->orderBy('IdMecanico','desc')
    ->paginate(7);
    return view ('datos/mecanico.index',["mecanico"=>$mecanico,"searchText"=>$query]);
  }
}
public function create(){
  $actor=DB::table('actor')
  ->where('FlgEli','=','1')->get();
  $empresa=DB::table('empresa')
  ->where('FlgEli','=','1')->get();
  return view("datos/mecanico.create",["actor"=>$actor],["empresa"=>$empresa]);
}
public function store(MecanicoFormRequest $request, ActorFormRequest $reqactor){
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

  $mecanico=new mecanico;
  $mecanico->IdMecanico=$request->get('IdMecanico');
  $mecanico->IdActor=$request->get('IdActor');
  $mecanico->FchCrea=Carbon::now();
  $mecanico->UsrCrea=$request->get('UsrCrea');
  $mecanico->WksCrea=$request->ip();
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->ip();
  $mecanico->FchMod=Carbon::now();
  $mecanico->FlgEli=1;
  $mecanico->save();
  return Redirect::to('datos/mecanico');
}
public function show($id){
  return view("datos/mecanico.show", ["mecanico"=>Mecanico::findOrFail($id)]);
}
public function edit($id){
  $actor=DB::table('mecanico as m')
  ->join('actor as a','a.IdActor','=','m.IdActor')
  ->join('empresa as e','e.IdEmpresa','=','a.IdEmpresa')
  ->select('a.Apellido_Paterno','a.Apellido_Materno','a.PrimerNombre','a.SegundoNombre',
  'a.RazonSocial','a.TipoDocumento','a.CodigoIdentificacion','a.RUC as Rem','a.IdEmpresa','e.NombreComercial',
  'a.UsrCrea','a.UsrMod','m.UsrCrea','m.UsrMod')
    ->where('m.IdMecanico','=',$id)->get();

  //->where('a.FlgEli','=','1')->get();
  //return view("datos/cliente.edit", ["actor"=>$actor], ["cliente"=>Cliente::findOrFail($id)]);
  return view("datos/mecanico.edit", ["actor"=>$actor], ["mecanico"=>Mecanico::findOrFail($id)]);
}
public function update(MecanicoFormRequest $request,$id){
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

  $mecanico=Mecanico::findOrFail($request->get('IdMecanico'));
  $mecanico->UsrMod=$request->get('UsrMod');
  $mecanico->WksMod=$request->ip();
  $mecanico->FchMod=Carbon::now();
  $mecanico->FlgEli=1;
  $mecanico->update();
  return Redirect::to('datos/mecanico');
}
public function destroy($id){
  $mecanico=Mecanico::findOrFail($id);
  $mecanico->FlgEli='0';
  $mecanico->update();
  return Redirect::to('datos/mecanico');
 }

 public function excel(){
   $mecanico = DB::table('mecanico')->get()->toArray();
   $mecanico_array[] = array('IdActor','IdMecanico','FchCrea',
   'UsrCrea','WksCrea','FchMod','UsrMod','WksMod','FlgEli');
   foreach($mecanico as $mec){
     $mecanico_array[] = array(
       'IdActor' => $mec->IdActor,
       'IdMecanico' => $mec->IdMecanico,
       'FchCrea' => $mec->FchCrea,
       'UsrCrea' => $mec->UsrCrea,
       'WksCrea' => $mec->WksCrea,
       'FchMod' => $mec->FchMod,
       'UsrMod' => $mec->UsrMod,
       'WksMod' => $mec->WksMod,
       'FlgEli' => $mec->FlgEli
     );
   }
   Excel::create('Mecanico', function($excel) use($mecanico_array){
     $excel->setTitle('Mecanicos');
     $excel->sheet('Mecanico', function($sheet)
     use ($mecanico_array){
      $sheet->fromArray($mecanico_array, null, 'A1', false, false);
    });
  })->download('xlsx');
 }
}
