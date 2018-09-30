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
					@foreach ($contrato_anexo as $cat):
						<tr>
							<td>{{$cat->IdContratoAnexo}}</td>
							<td>{{$cat->IdContrato}}</td>
							<td>{{$cat->CodDocumentoAnexo}}</td>
							<td>{{$cat->RutaDocumento}}</td>
							<td>{{$cat->FchCrea}}</td>
							<td>{{$cat->UsrCrea}}</td>
							<td>{{$cat->WksCrea}}</td>
							<td>{{$cat->FchMod}}</td>
							<td>{{$cat->UsrMod}}</td>
							<td>{{$cat->WksMod}}</td>
							<td>{{$cat->FlgEli}}</td>
						</tr>
					@endforeach
				</table>
			</div>
			{{$contrato_anexo->render()}}
		</div>
	</div>
@endsection
