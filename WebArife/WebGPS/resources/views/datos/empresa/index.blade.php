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
					@foreach ($empresa as $cat):
						<tr>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->RUC}}</td>
							<td>{{$cat->RazonSocial}}</td>
							<td>{{$cat->NombreComercial}}</td>
							<td>{{$cat->RutaLogo}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
							<td>{{$cat->Representante}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="#"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$empresa->render()}}
		</div>
	</div>
@endsection
