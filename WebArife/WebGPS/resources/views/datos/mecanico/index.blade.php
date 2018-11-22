@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Mecanicos <a href="mecanico/create"><button class="btn btn-success"> Nuevo</button></a>
				<!--<a href="{{url('/')}}/views/excel"><button class="btn btn-success">Exportar</button></a>-->
				<a href="{{route('index.excel')}}"><button class="btn btn-success">Exportar</button></a>
			</h3>
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
						<th>Paterno</th>
						<th>Materno</th>
						<th>Nombre</th>
						<th>Tipo Documento</th>
						<th>Nro Documento</th>
						<th>Razon Social</th>
					</thead>
					@foreach ($mecanico as $mec)
						<tr>
							<td>{{$mec->IdMecanico}}</td>
							<td>{{$mec->IdActor}}</td>
							<th>{{$mec->Apellido_Paterno}}</th>
							<th>{{$mec->Apellido_Materno}}</th>
							<th>{{$mec->PrimerNombre}}</th>
							<th>{{$mec->TipoDocumento}}</th>
							<th>{{$mec->CodigoIdentificacion}}</th>
							<th>{{$mec->RazonSocial}}</th>
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
