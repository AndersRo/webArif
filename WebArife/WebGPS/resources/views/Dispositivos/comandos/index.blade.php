@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Dispositivos <a href="comandos/create"><button class="btn btn-success">Nuevo</button></a> </h3>
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
					@foreach ($comandos as $cat):
						<tr>
							<td>{{$cat->IdComandos}}</td>
							<td>{{$cat->CodTipoComandos}}</td>
							<td>{{$cat->Comandos}}</td>
							<td>{{$cat->IdModelo}}</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$comandos->render()}}
		</div>
	</div>
@endsection
