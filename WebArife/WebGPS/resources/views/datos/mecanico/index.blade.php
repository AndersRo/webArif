@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Mecanicos <a href="mecanico/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos/mecanico.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdMecanico</th>
						<th>IdActor</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
					</thead>
					@foreach ($mecanico as $mec)
						<tr>
							<td>{{$mec->IdMecanico}}</td>
							<td>{{$mec->IdActor}}</td>
							<td>{{$mec->FchCrea}}</td>
							<td>{{$mec->UsrCrea}}</td>
							<td>{{$mec->WksCrea}}</td>
							<td>{{$mec->FchMod}}</td>
							<td>{{$mec->UsrMod}}</td>
							<td>{{$mec->WksMod}}</td>
							<td>{{$mec->FlgEli}}</td>
							<td>
								<a href="{{URL::action('MecanicoController@edit',$mec->IdMecanico)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$mec->IdMecanico}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('datos.mecanico.modal')
					@endforeach
				</table>
			</div>
			{{$mecanico->render()}}
		</div>
	</div>
@endsection
