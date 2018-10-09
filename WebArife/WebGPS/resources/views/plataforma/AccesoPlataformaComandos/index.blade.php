@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Accesos Comandos <a href="contrato/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('plataforma.AccesoPlataformaComandos.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdAccesoComandos</th>
						<th>IdAccesoDetalle</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($accesoplataformacomandos as $apc):
						<tr>
							<td>{{$apc->IdAccesoComandos}}</td>
							<td>{{$apc->IdAccesoDetalle}}</td>
							<td>{{$apc->FchCrea}}</td>
							<td>{{$apc->UsrCrea}}</td>
							<td>{{$apc->WksCrea}}</td>
							<td>{{$apc->FchMod}}</td>
							<td>{{$apc->UsrMod}}</td>
							<td>{{$apc->WksMod}}</td>
							<td>{{$apc->FlgEli}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$apc->IdAccesoComandos}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('plataforma.AccesoPlataformaComandos.modal')
					@endforeach
				</table>
			</div>
			{{$accesoplataformacomandos->render()}}
		</div>
	</div>
@endsection
