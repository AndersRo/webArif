@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Taller <a href="taller/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos/taller.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdTaller</th>
						<th>Descripcion</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
					</thead>
					@foreach ($taller as $tlr)
						<tr>
							<td>{{$tlr->IdTaller}}</td>
							<td>{{$tlr->Descripcion}}</td>
							<td>{{$tlr->FchCrea}}</td>
							<td>{{$tlr->UsrCrea}}</td>
							<td>{{$tlr->WksCrea}}</td>
							<td>{{$tlr->FchMod}}</td>
							<td>{{$tlr->UsrMod}}</td>
							<td>{{$tlr->WksMod}}</td>
							<td>{{$tlr->FlgEli}}</td>
							<td>
								<a href="{{URL::action('TallerController@edit',$tlr->IdTaller)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$tlr->IdTaller}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('datos.taller.modal')
					@endforeach
				</table>
			</div>
			{{$taller->render()}}
		</div>
	</div>
@endsection
