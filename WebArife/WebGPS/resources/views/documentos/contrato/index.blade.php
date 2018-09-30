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
					@foreach ($contrato as $cat):
						<tr>
							<td>{{$cat->IdContrato}}</td>
							<td>{{$cat->CodTipoServicio}}</td>
							<td>{{$cat->FechaInicio}}</td>
							<td>{{$cat->FechaFin}}</td>
							<td>{{$cat->IdCliente}}</td>
							<td>{{$cat->CodTipoContrato}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->IdVehiculo}}</td>
							<td>{{$cat->EstadoContrato}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$contrato->render()}}
		</div>
	</div>
@endsection
