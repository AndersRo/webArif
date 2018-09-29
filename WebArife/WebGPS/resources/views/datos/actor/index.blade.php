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
					@foreach ($actor as $cat):
						<tr>
							<td>{{$cat->IdActor}}</td>
							<td>{{$cat->TipoPersona}}</td>
							<td>{{$cat->Apellido_Paterno}}</td>
							<td>{{$cat->Apellido_Materno}}</td>
							<td>{{$cat->PrimerNombre}}</td>
							<td>{{$cat->SegundoNombre}}</td>
							<td>{{$cat->RazonSocial}}</td>
							<td>{{$cat->TipoDocumento}}</td>
							<td>{{$cat->CodigoIdentificacion}}</td>
							<td>{{$cat->RUC}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->FlgEli}}</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$actor->render()}}
		</div>
	</div>
@endsection
