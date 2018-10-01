@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Orden de Trabajo <a href="contrato_ordenes/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.ordentrabajo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdOrden</th>
						<th>IdEmpresa</th>
				    <th>IdMecanico</th>
						<th>IdCliente</th>
						<th>IdVehiculo</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
						<th>EstadoOrden</th>
						<th>Obsvacion</th>
						<th>FechaRegistro</th>
						<th>FechaProgramada</th>
					</thead>
					@foreach ($ordentrabajo as $cat):
						<tr>
							<td>{{$cat->IdOrden}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->IdMecanico}}</td>
							<td>{{$cat->IdCliente}}</td>
							<th>{{$cat->IdVehiculo}}</th>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->EstadoOrden}}</td>
							<td>{{$cat->Obsvacion}}</td>
							<td>{{$cat->FechaRegistro}}</td>
							<th>{{$cat->FechaProgramada}}</th>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$ordentrabajo->render()}}
		</div>
	</div>
@endsection
