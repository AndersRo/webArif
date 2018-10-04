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
						<th>IdActor</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
					</thead>
					@foreach ($cliente as $cli):
						<tr>
							<td>{{$cli->IdCliente}}</td>
							<td>{{$cli->IdActor}}</td>
							<td>{{$cli->FchCrea}}</td>
							<td>{{$cli->UsrCrea}}</td>
							<td>{{$cli->WksCrea}}</td>
							<td>{{$cli->FchMod}}</td>
							<td>{{$cli->UsrMod}}</td>
							<td>{{$cli->WksMod}}</td>
							<td>{{$cli->FlgEli}}</td>
							<td>
								<a href="{{URL::action('ClienteController@edit',$cli->IdCliente)}}"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$cliente->render()}}
		</div>
	</div>
@endsection
