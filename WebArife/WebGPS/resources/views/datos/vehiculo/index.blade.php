@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Vehiculos <a href="datos/create"><button class="btn btn-success">Nuevo</button></a> </h3>
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
					@foreach ($vehiculo as $cat):
						<tr>
							<td>{{$cat->IdVehiculo}}</td>
							<td>{{$cat->Placa}}</td>
							<td>{{$cat->Chasis}}</td>
							<td>{{$cat->Motor}}</td>
							<td>{{$cat->Modelo}}</td>
							<td>{{$cat->Color}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->RutaReferencia}}</td>
							<td>{{$cat->RutaTarjeta}}</td>
							<td>{{$cat->IdEmpresa}}</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$vehiculo->render()}}
		</div>
	</div>
@endsection
