@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Dispositivos <a href="cliente/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('Dispositivos.dispositivo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdDispositivo</th>
						<th>IdEmpresa</th>
						<th>IdModelo</th>
						<th>Serie</th>
						<th>IMEI</th>
						<th>IdModelo</th>
						<th>NroSim</th>
						<th>NroIDN</th>
						<th>IdEmpresa</th>
					</thead>
					@foreach ($dispositivos as $cat):
						<tr>
							<td>{{$cat->IdDispositivo}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->IdModelo}}</td>
							<td>{{$cat->Serie}}</td>
							<td>{{$cat->IMEI}}</td>
							<td>{{$cat->IdModelo}}</td>
							<td>{{$cat->NroSim}}</td>
							<td>{{$cat->NroIDN}}</td>
							<td>{{$cat->IdEmpresa}}</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$dispositivos->render()}}
		</div>
	</div>
@endsection
