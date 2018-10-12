@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Tablas <a href="tablas/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('tablas.tablas.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdTabla</th>
						<th>Descripcion</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($tablas as $tab)
						<tr>
							<td>{{$tab->IdTabla}}</td>
							<td>{{$tab->Descripcion}}</td>
							<td>{{$tab->FchCrea}}</td>
							<td>{{$tab->UsrCrea}}</td>
							<td>{{$tab->WksCrea}}</td>
							<td>{{$tab->FchMod}}</td>
							<td>{{$tab->UsrMod}}</td>
							<td>{{$tab->WksMod}}</td>
							<td>{{$tab->FlgEli}}</td>
							<td>
								<a href="#"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$tab->IdTabla}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('tablas.tablas.modal')
					@endforeach
				</table>
			</div>
			{{$tablas->render()}}
		</div>
	</div>
@endsection
