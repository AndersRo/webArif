@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Vehiculos <a href="vehiculo/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos/vehiculo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdVehiculo</th>
						<th>Placa</th>
						<th>Chasis</th>
						<th>Motor</th>
						<th>Modelo</th>
						<th>Color</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
						<th>RutaReferencia</th>
						<th>RutaTarjeta</th>
						<th>IdEmpresa</th>
					</thead>
					@foreach ($vehiculo as $veh):
						<tr>
							<td>{{$veh->IdVehiculo}}</td>
							<td>{{$veh->Placa}}</td>
							<td>{{$veh->Chasis}}</td>
							<td>{{$veh->Motor}}</td>
							<td>{{$veh->Modelo}}</td>
							<td>{{$veh->Color}}</td>
							<td>{{$veh->FchCrea}}</td>
							<td>{{$veh->UsrCrea}}</td>
							<td>{{$veh->WksCrea}}</td>
							<td>{{$veh->FchMod}}</td>
							<td>{{$veh->UsrMod}}</td>
							<td>{{$veh->WksMod}}</td>
							<td>{{$veh->FlgEli}}</td>
							<td>{{$veh->RutaReferencia}}</td>
							<td>{{$veh->RutaTarjeta}}</td>
							<td>{{$veh->IdEmpresa}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$veh->IdVehiculo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('datos.vehiculo.modal')
					@endforeach
				</table>
			</div>
			{{$vehiculo->render()}}
		</div>
	</div>
@endsection
