@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Contrato Anexo <a href="contrato_anexo/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('documentos.contrato_anexo.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>IdContratoAnexo</th>
						<th>IdContrato</th>
				    <th>CodDocumentoAnexo</th>
				    <th>RutaDocumento</th>
						<th>FchCrea</th>
						<th>UsrCrea</th>
				    <th>WksCrea</th>
						<th>FchMod</th>
						<th>UsrMod</th>
				    <th>WksMod</th>
				    <th>FlgEli</th>
					</thead>
					@foreach ($contrato_anexo as $cna):
						<tr>
							<td>{{$cna->IdContratoAnexo}}</td>
							<td>{{$cna->IdContrato}}</td>
							<td>{{$cna->CodDocumentoAnexo}}</td>
							<td>{{$cna->RutaDocumento}}</td>
							<td>{{$cna->FchCrea}}</td>
							<td>{{$cna->UsrCrea}}</td>
							<td>{{$cna->WksCrea}}</td>
							<td>{{$cna->FchMod}}</td>
							<td>{{$cna->UsrMod}}</td>
							<td>{{$cna->WksMod}}</td>
							<td>{{$cna->FlgEli}}</td>
							<td>
								<a href="{{URL::action('Contrato_AnexoController@edit',$cna->IdContratoAnexo)}}"><button class="btn btn-info">Editar</button></a>
								<a href="" data-target="#modal-delete-{{$cna->IdContratoAnexo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
							</td>
						</tr>
						@include('documentos.contrato_anexo.modal')
					@endforeach
				</table>
			</div>
			{{$contrato_anexo->render()}}
		</div>
	</div>
@endsection
