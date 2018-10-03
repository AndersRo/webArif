@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Dispositivos <a href="marca/create"><button class="btn btn-success">Nuevo</button></a> </h3>
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
					@foreach ($marca as $cat):
						<tr>
							<td>{{$cat->IdMarca}}</td>
							<td>{{$cat->Descripcion}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$marca->render()}}
		</div>
	</div>
@endsection
