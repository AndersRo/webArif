@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Dispositivos <a href="dispositivo/create"><button class="btn btn-success">Nuevo</button></a> </h3>
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
					@foreach ($dispositivos as $dsp):
						<tr>
							<td>{{$dsp->IdDispositivo}}</td>
							<td>{{$dsp->IdEmpresa}}</td>
							<td>{{$dsp->IdModelo}}</td>
							<td>{{$dsp->Serie}}</td>
							<td>{{$dsp->IMEI}}</td>
							<td>{{$dsp->IdModelo}}</td>
							<td>{{$dsp->NroSim}}</td>
							<td>{{$dsp->NroIDN}}</td>
							<td>{{$dsp->IdEmpresa}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<!--<a href="" data-target="#modal-delete-{{$dsp->IdDispositivo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>-->
							</td>
						</tr>
						@include('Dispositivos.dispositivo.modal')
					@endforeach
				</table>
			</div>
			{{$dispositivos->render()}}
		</div>
	</div>
@endsection
