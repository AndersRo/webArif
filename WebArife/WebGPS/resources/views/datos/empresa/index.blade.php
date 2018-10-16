@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Empresas <a href="empresa/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('datos.empresa.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdEmpresa</th>
						<th>RUC</th>
				    <th>RazonSocial</th>
				    <th>NombreComercial</th>
				    <th>RutaLogo</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
				    <th>FchCrea</th>
						<th>FchMod</th>
				    <th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
						<th>Representante</th>
					</thead>
					@foreach ($empresa as $emp)
						<tr>
							<td>{{$emp->IdEmpresa}}</td>
							<td>{{$emp->RUC}}</td>
							<td>{{$emp->RazonSocial}}</td>
							<td>{{$emp->NombreComercial}}</td>
							<td>
								<img src="{{asset('imagenes/empresa/'.$emp->RutaLogo)}}" alt="{{$emp->RazonSocial}}" height="100px" width="100px" class="img-thumbnail">
							</td>
							<td>{{$emp->UsrCrea}}</td>
							<td>{{$emp->WksCrea}}</td>
							<td>{{$emp->FchCrea}}</td>
							<td>{{$emp->FchMod}}</td>
							<td>{{$emp->UsrMod}}</td>
							<td>{{$emp->WksMod}}</td>
							<td>{{$emp->FlgEli}}</td>
							<td>{{$emp->Representante}}</td>
							<td>
								<a href="{{URL::action('EmpresaController@edit',$emp->IdEmpresa)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$emp->IdEmpresa}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('datos.empresa.modal')
					@endforeach
				</table>
			</div>
			{{$empresa->render()}}
		</div>
	</div>
@endsection
