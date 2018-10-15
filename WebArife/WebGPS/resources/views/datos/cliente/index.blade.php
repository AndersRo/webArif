@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Clientes <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos/cliente.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdCliente</th>
						<th>Paterno</th>
						<th>Materno</th>
						<th>Primer Nombre</th>
						<th>Tipo Documento</th>
						<th>Nro Documento</th>
						<th>Razon Social</th>
					</thead>
					@foreach ($cliente as $cli)
						<tr>
							<td>{{$cli->IdCliente}}</td>
							<td>{{$cli->Apellido_Paterno}}</td>
							<td>{{$cli->Apellido_Materno}}</td>
							<td>{{$cli->PrimerNombre}}</td>
							<td>{{$cli->TipoDocumento}}</td>
							<td>{{$cli->CodigoIdentificacion}}</td>
							<td>{{$cli->RazonSocial}}</td>
							<td>
								<a href="{{URL::action('ClienteController@edit',$cli->IdCliente)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$cli->IdCliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('datos.cliente.modal')
					@endforeach
				</table>
			</div>
			{{$cliente->render()}}
		</div>
	</div>
@endsection
