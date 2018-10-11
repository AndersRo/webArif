@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Marcas<a href="marca/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('Dispositivos.marca.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdMarca</th>
						<th>Descripcion</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
						<th>FchCrea</th>
					</thead>
					@foreach ($marca as $mrc)
						<tr>
							<td>{{$mrc->IdMarca}}</td>
							<td>{{$mrc->Descripcion}}</td>
							<td>{{$mrc->UsrCrea}}</td>
							<td>{{$mrc->WksCrea}}</td>
							<td>{{$mrc->FchMod}}</td>
							<td>{{$mrc->UsrMod}}</td>
							<td>{{$mrc->WksMod}}</td>
							<td>{{$mrc->FlgEli}}</td>
							<td>{{$mrc->FchCrea}}</td>
							<td>
								<a href="{{URL::action('MarcaController@edit',$mrc->IdMarca)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$mrc->IdMarca}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('Dispositivos.marca.modal')
					@endforeach
				</table>
			</div>
			{{$marca->render()}}
		</div>
	</div>
@endsection
