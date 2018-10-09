@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Orden de Trabajo <a href="tablas_detalle/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('tablas.tablas_detalle.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdTablaDetalle</th>
						<th>IdTabla</th>
				    <th>Descripcion</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($tablas_detalle as $tad):
						<tr>
							<td>{{$tad->IdTablaDetalle}}</td>
							<td>{{$tad->IdTabla}}</td>
							<td>{{$tad->Descripcion}}</td>
							<td>{{$tad->FchCrea}}</td>
							<td>{{$tad->UsrCrea}}</td>
							<td>{{$tad->WksCrea}}</td>
							<td>{{$tad->FchMod}}</td>
							<td>{{$tad->UsrMod}}</td>
							<td>{{$tad->WksMod}}</td>
							<td>{{$tad->FlgEli}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$tad->IdTablaDetalle}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('tablas.tablas.modal')
					@endforeach
				</table>
			</div>
			{{$tablas_detalle->render()}}
		</div>
	</div>
@endsection
