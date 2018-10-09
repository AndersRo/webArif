@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Detalle Orden de Trabajo <a href="ordentrabajo_detalle/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.ordentrabajo_detalle.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdOrdenDetalle</th>
						<th>IdOrden</th>
				    <th>IdDispositivo</th>
						<th>CodTipoTrabajo</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
						<th>FechaInicio</th>
						<th>FechaFin</th>
					</thead>
					@foreach ($ordentrabajo_detalle as $odt):
						<tr>
							<td>{{$odt->IdOrdenDetalle}}</td>
							<td>{{$odt->IdOrden}}</td>
							<td>{{$odt->IdDispositivo}}</td>
							<td>{{$odt->CodTipoTrabajo}}</td>
							<td>{{$odt->FchCrea}}</td>
							<td>{{$odt->UsrCrea}}</td>
							<td>{{$odt->WksCrea}}</td>
							<td>{{$odt->FchMod}}</td>
							<td>{{$odt->UsrMod}}</td>
							<td>{{$odt->WksMod}}</td>
							<td>{{$odt->FlgEli}}</td>
							<td>{{$odt->FechaInicio}}</td>
							<th>{{$odt->FechaFin}}</th>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$odt->IdOrdenDetalle}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('documentos.ordentrabajo_detalle.modal')
					@endforeach
				</table>
			</div>
			{{$ordentrabajo_detalle->render()}}
		</div>
	</div>
@endsection
