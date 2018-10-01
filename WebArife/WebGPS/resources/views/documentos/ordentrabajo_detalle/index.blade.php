@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Detalle Orden de Trabajo <a href="contrato_ordenes/create"><button class="btn btn-success">Nuevo</button></a> </h3>
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
					@foreach ($ordentrabajo_detalle as $cat):
						<tr>
							<td>{{$cat->IdOrdenDetalle}}</td>
							<td>{{$cat->IdOrden}}</td>
							<td>{{$cat->IdDispositivo}}</td>
							<td>{{$cat->CodTipoTrabajo}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->FechaInicio}}</td>
							<th>{{$cat->FechaFin}}</th>
						</tr>
					@endforeach
				</table>
			</div>
			{{$ordentrabajo_detalle->render()}}
		</div>
	</div>
@endsection
