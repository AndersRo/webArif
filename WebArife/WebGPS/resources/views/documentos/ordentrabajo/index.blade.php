@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Orden de Trabajo <a href="ordentrabajo/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.ordentrabajo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdOrden</th>
						<th>Empresa</th>
				    <th>Mecanico</th>
						<th>Cliente</th>
						<th>Vehiculo</th>
						<th>EstadoOrden</th>
						<th>Obsvacion</th>
						<th>FechaRegistro</th>
						<th>FechaProgramada</th>
					</thead>
					@foreach ($ordentrabajo as $ont)
						<tr>
							<td>{{$ont->IdOrden}}</td>
							<td>{{$ont->RazonSocial}}</td>
							<td>{{$ont->NomMec}}</td>
							<td>{{$ont->NomCli}}</td>
							<th>{{$ont->Placa}}</th>
							<td><small class="label pull-center bg-green">{{$ont->EstadoOrden}}</small></td>
							<td>{{$ont->Obsvacion}}</td>
							<td>{{$ont->FechaRegistro}}</td>
							<th>{{$ont->FechaProgramada}}</th>
							<td>
								<a href="{{URL::action('OrdenTrabajoController@edit',$ont->IdOrden)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$ont->IdOrden}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('documentos.ordentrabajo.modal')
					@endforeach
				</table>
			</div>
			{{$ordentrabajo->render()}}
		</div>
	</div>
@endsection
