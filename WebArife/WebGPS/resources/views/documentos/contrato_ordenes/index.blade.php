@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Contrato Ordenes <a href="contrato_ordenes/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.contrato_ordenes.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdContratoOrdenes</th>
						<th>IdContrato</th>
				    <th>IdOrden</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($contrato_ordenes as $cno)
						<tr>
							<td>{{$cno->IdContratoOrdenes}}</td>
							<td>{{$cno->IdContrato}}</td>
							<td>{{$cno->IdOrden}}</td>
							<td>{{$cno->FchCrea}}</td>
							<td>{{$cno->UsrCrea}}</td>
							<td>{{$cno->WksCrea}}</td>
							<td>{{$cno->FchMod}}</td>
							<td>{{$cno->UsrMod}}</td>
							<td>{{$cno->WksMod}}</td>
							<td>{{$cno->FlgEli}}</td>
							<td>
								<a href="{{URL::action('Contrato_OrdenesController@edit',$cno->IdContratoOrdenes)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$cno->IdContratoOrdenes}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('documentos.contrato_ordenes.modal')
					@endforeach
				</table>
			</div>
			{{$contrato_ordenes->render()}}
		</div>
	</div>
@endsection
