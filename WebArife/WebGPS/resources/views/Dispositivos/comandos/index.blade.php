@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Comandos <a href="comandos/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('Dispositivos.comandos.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdComandos</th>
						<th>CodTipoComandos</th>
						<th>Comandos</th>
						<th>IdModelo</th>
					</thead>
					@foreach ($comandos as $com):
						<tr>
							<td>{{$com->IdComandos}}</td>
							<td>{{$com->CodTipoComandos}}</td>
							<td>{{$com->Comandos}}</td>
							<td>{{$com->IdModelo}}</td>
							<td>
								<a href="{{URL::action('ComandosController@edit',$com->IdComandos)}}"><button class="btn btn-info">Editar</button></a>
								<!--<a href="" data-target="#modal-delete-{{$com->IdComandos}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>-->
							</td>
						</tr>
						@include('Dispositivos.comandos.modal')
					@endforeach

				</table>
			</div>
			{{$comandos->render()}}
		</div>
	</div>
@endsection
