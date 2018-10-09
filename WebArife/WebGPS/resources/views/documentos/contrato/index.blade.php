@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Contratos <a href="contrato/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.contrato.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdContrato</th>
						<th>CodTipoServicio</th>
				    <th>FechaInicio</th>
				    <th>FechaFin</th>
				    <th>IdCliente</th>
						<th>CodTipoContrato</th>
				    <th>IdEmpresa</th>
				    <th>IdVehiculo</th>
						<th>EstadoContrato</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($contrato as $cnt):
						<tr>
							<td>{{$cnt->IdContrato}}</td>
							<td>{{$cnt->CodTipoServicio}}</td>
							<td>{{$cnt->FechaInicio}}</td>
							<td>{{$cnt->FechaFin}}</td>
							<td>{{$cnt->IdCliente}}</td>
							<td>{{$cnt->CodTipoContrato}}</td>
							<td>{{$cnt->IdEmpresa}}</td>
							<td>{{$cnt->IdVehiculo}}</td>
							<td>{{$cnt->EstadoContrato}}</td>
							<td>{{$cnt->FchCrea}}</td>
							<td>{{$cnt->UsrCrea}}</td>
							<td>{{$cnt->WksCrea}}</td>
							<td>{{$cnt->FchMod}}</td>
							<td>{{$cnt->UsrMod}}</td>
							<td>{{$cnt->WksMod}}</td>
							<td>{{$cnt->FlgEli}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$cnt->IdContrato}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('documentos.contrato.modal')
					@endforeach
				</table>
			</div>
			{{$contrato->render()}}
		</div>
	</div>
@endsection
