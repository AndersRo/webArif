@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Dispositivos <a href="modelo/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('Dispositivos.modelo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdModelo</th>
						<th>Descripcion</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
						<th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
						<th>WksMod</th>
						<th>FlgEli</th>
						<th>FotoReferencial</th>
						<th>IdMarca</th>
					</thead>
					@foreach ($modelo as $mod):
						<tr>
							<td>{{$mod->IdModelo}}</td>
							<td>{{$mod->Descripcion}}</td>
							<td>{{$mod->UsrCrea}}</td>
							<td>{{$mod->UsrCrea}}</td>
							<td>{{$mod->WksCrea}}</td>
							<td>{{$mod->UsrMod}}</td>
							<td>{{$mod->FchMod}}</td>
							<td>{{$mod->UsrMod}}</td>
							<td>{{$mod->WksMod}}</td>
							<td>{{$mod->FlgEli}}</td>
							<td>
								<img src="{{asset('imagenes/modelo/'.$mod->FotoReferencial)}}" alt="{{$mod->Descripcion}}" height="100px" width="100px" class="img-thumbnail">
							</td>
							<td>{{$mod->IdMarca}}</td>
							<td>
								<a href="{{URL::action('Modeloontroller@edit',$mod->IdModelo)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$mod->IdModelo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('Dispositivos.modelo.modal')
					@endforeach
				</table>
			</div>
			{{$modelo->render()}}
		</div>
	</div>
@endsection
