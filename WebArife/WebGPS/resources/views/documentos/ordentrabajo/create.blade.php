@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Taller</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'datos/vehiculo','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}


        <div class="form-group">
          <label for="IdOrden">Id</label>
          <input type="text" name="IdOrden" class="form-control" placeholder="IdOrden">
        </div>

        <div class="form-group">
          <label for="IdEmpresa">Id empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" placeholder="IdEmpresa">
        </div>

        <div class="form-group">
           <label for="IdMecanico">Id mecanico</label>
            <input type="text" name="IdMecanico" class="form-control" placeholder="IdMecanico">
        </div>

        <div class="form-group">
           <label for="IdCliente">Id cliente</label>
            <input type="text" name="IdCliente" class="form-control" placeholder="IdCliente">
        </div>

         <div class="form-group">
           <label for="IdVehiculo">Id vehivulo</label>
           <input type="text" name="IdVehiculo" class="form-control" placeholder="IdVehiculo">
         </div>

        <div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>

        <div class="form-group">
          <label for="UsrCrea">usuario</label>
          <input type="text" name="UsrCrea" class="form-control" placeholder="UsrCrea">
        </div>

        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>

        <div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>

        <div class="form-group">
          <label for="UsrMod">Modificar Usuario</label>
          <input type="text" name="UsrMod" class="form-control" placeholder="Usuario">
        </div>

				<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>

        <div class="form-group">
          <label for="EstadoOrden">Estado Orden</label>
          <input type="text" name="EstadoOrden" class="form-control" placeholder="EstadoOrden">
        </div>

        <div class="form-group">
          <label for="Obsvacion">observacion</label>
          <input type="text" name="Obsvacion" class="form-control" placeholder="Obsvacion">
        </div>

        <div class="form-group">
          <label for="FechaRegistro">registrar fecha</label>
          <input type="text" name="FechaRegistro" class="form-control" placeholder="FechaRegistro">
        </div>


        <div class="form-group">
          <label for="FechaProgramada">Fecha Programada</label>
          <input type="text" name="FechaProgramada" class="form-control" placeholder="FechaProgramada">
        </div>


        <div class="form-group">
          <label for="FechaEjecutada">Fecha ejecutada</label>
          <input type="text" name="FechaEjecutada" class="form-control" placeholder="FechaEjecutada">
        </div>

      <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
