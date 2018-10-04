@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Actores <a href="actor/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos.actor.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdActor</th>
						<th>TipoPersona</th>
				    <th>Apellido_Paterno</th>
				    <th>Apellido_Materno</th>
				    <th>PrimerNombre</th>
				    <th>SegundoNombre</th>
				    <th>RazonSocial</th>
				    <th>TipoDocumento</th>
				    <th>CodigoIdentificacion</th>
				    <th>RUC</th>
				    <th>IdEmpresa</th>
				    <th>FchCrea</th>
				    <th>UsrCrea</th>
				    <th>WksCrea</th>
				    <th>FchMod</th>
				    <th>WksMod</th>
				    <th>UsrMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($actor as $act):
						<tr>
							<td>{{$act->IdActor}}</td>
							<td>{{$act->TipoPersona}}</td>
							<td>{{$act->Apellido_Paterno}}</td>
							<td>{{$act->Apellido_Materno}}</td>
							<td>{{$act->PrimerNombre}}</td>
							<td>{{$act->SegundoNombre}}</td>
							<td>{{$act->RazonSocial}}</td>
							<td>{{$act->TipoDocumento}}</td>
							<td>{{$act->CodigoIdentificacion}}</td>
							<td>{{$act->RUC}}</td>
							<td>{{$act->IdEmpresa}}</td>
							<td>{{$act->FchCrea}}</td>
							<td>{{$act->UsrCrea}}</td>
							<td>{{$act->WksCrea}}</td>
							<td>{{$act->FchMod}}</td>
							<td>{{$act->UsrMod}}</td>
							<td>{{$act->WksMod}}</td>
							<td>{{$act->FchCrea}}</td>
							<td>{{$act->UsrCrea}}</td>
							<td>{{$act->FlgEli}}</td>
							<td>
								<a href="{{URL::action('ActorController@edit',$act->IdActor)}}"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$actor->render()}}
		</div>
	</div>
@endsection
