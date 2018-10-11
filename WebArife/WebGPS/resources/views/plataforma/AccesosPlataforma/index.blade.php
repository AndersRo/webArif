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
					@foreach ($accesosplataforma as $acp):
						<tr>
							<td>{{$acp->IdCliente}}</td>
							<td>{{$acp->IdAcceso}}</td>
							<td>{{$acp->FlgAccesoApp}}</td>
							<td>{{$acp->FlgAccesoWeb}}</td>
							<td>{{$acp->IdEmpresa}}</td>
							<td>{{$acp->MaxConexiones}}</td>
							<td>{{$acp->LoginAcceso}}</td>
							<td>{{$acp->ContrasnaPlataforma}}</td>
							<td>{{$acp->ContrasenaComados}}</td>
							<td>{{$acp->FchCrea}}</td>
							<td>{{$acp->UsrCrea}}</td>
							<td>{{$acp->WksCrea}}</td>
							<td>{{$acp->FchMod}}</td>
							<td>{{$acp->UsrMod}}</td>
							<td>{{$acp->WksMod}}</td>
							<td>{{$acp->FlgEli}}</td>
							<td>{{$acp->EstadoAcceso}}</td>
							<td>
								<a href="{{URL::action('AccesosPlataformaController@edit',$acp->IdAcceso)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$acp->IdAcceso}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('plataforma.AccesosPlataforma.modal')
					@endforeach
				</table>
			</div>
			{{$accesosplataforma->render()}}
		</div>
	</div>
@endsection
