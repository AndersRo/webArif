@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Accesos Plataforma Detalle <a href="AccesoPlataformaDetalle/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('plataforma.AccesoPlataformaDetalle.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdAccesoDetalle</th>
						<th>IdAcceso</th>
						<th>IdContrato</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($accesoplataformadetalle as $apd):
						<tr>
							<td>{{$apd->IdAccesoDetalle}}</td>
							<td>{{$apd->IdAcceso}}</td>
							<td>{{$apd->IdContrato}}</td>
							<td>{{$apd->FchCrea}}</td>
							<td>{{$apd->UsrCrea}}</td>
							<td>{{$apd->WksCrea}}</td>
							<td>{{$apd->FchMod}}</td>
							<td>{{$apd->UsrMod}}</td>
							<td>{{$apd->WksMod}}</td>
							<td>{{$apd->FlgEli}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$apd->IdAccesoDetalle}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include(plataforma.AccesoPlataformaDetalle.modal)
					@endforeach
				</table>
			</div>
			{{$accesoplataformadetalle->render()}}
		</div>
	</div>
@endsection
