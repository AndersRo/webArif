@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
			<h3>Listado de Usuarios <a href="seguridad/create"><button class="btn btn-success">Nuevo</button></a> </h3>
			@include('seguridad.usuario.search')
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-codensed table-hover">
					<thead>
						<th>Id</th>
						<th>login</th>
						<th>password</th>
						<th>createt_at/th>
						<th>updated_at</th>
						<th>IdEmpresa</th>
						<th>IdActor</th>
					</thead>
					@foreach ($users as $cat):
						<tr>
							<td>{{$cat->id}}</td>
							<td>{{$cat->login}}</td>
							<td>{{$cat->password}}</td>
							<td>{{$cat->createt_at}}</td>
							<td>{{$cat->udapted_at}}</td>
							<td>{{$cat->IdEmpresa}}</td>
							<td>{{$cat->IdActor}}</td>
						</tr>
					@endforeach

				</table>
			</div>
			{{$users->render()}}
		</div>
	</div>
@endsection
