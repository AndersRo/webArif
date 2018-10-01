@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Accesos Comandos <a href="AccesosPlataforma/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('plataforma.AccesosPlataforma.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdCliente</th>
						<th>IdAcceso</th>
						<th>FlgAccesoApp</th>
						<th>FlgAccesoWeb</th>
						<th>IdEmpresa</th>
						<th>MaxConexiones</th>
						<th>LoginAcceso</th>
						<th>ContrasnaPlataforma</th>
						<th>ContrasenaComados</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
						<th>EstadoAcceso</th>
					</thead>
					@foreach ($accesosplataforma as $cat):
						<tr>
							<td>{{$cat->IdCliente}}</td>
							<td>{{$cat->IdAcceso}}</td>
							<td>{{$cat->FlgAccesoApp}}</td>
							<td>{{$cat->FlgAccesoWeb}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->MaxConexiones}}</td>
							<td>{{$cat->LoginAcceso}}</td>
							<td>{{$cat->ContrasnaPlataforma}}</td>
							<td>{{$cat->ContrasenaComados}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->EstadoAcceso}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$accesosplataforma->render()}}
		</div>
	</div>
@endsection
