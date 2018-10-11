@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar ordentrabajo: {{$OrdenTrabajo->IdOrden}}</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif
      </div>
    </div>

        {!!Form::model($OrdenTrabajo,['method'=>'PATCH','route'=>['ordentrabajo.update',$OrdenTrabajo->IdOrden]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdOrden">Id Orden</label>
          <input type="text" name="IdOrden" class="form-control" value="{{$OrdenTrabajo->IdOrden}}" placeholder="IdOrden">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdEmpresa">Id Empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" value="{{$OrdenTrabajo->IdEmpresa}}" placeholder="CodTipoServicio">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdMecanico">Id Mecanico</label>
          <input type="text" name="IdMecanico" class="form-control" value="{{$OrdenTrabajo->IdMecanico}}" placeholder="IdMecanico">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdCliente">Id Cliente</label>
          <input type="text" name="IdCliente" class="form-control" value="{{$OrdenTrabajo->IdCliente}}" placeholder="IdCliente">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdVehiculo">Id Vehiculo</label>
          <input type="text" name="IdVehiculo" class="form-control" value="{{$OrdenTrabajo->IdVehiculo}}" placeholder="IdVehiculo">
        </div>
      </div>

  <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">WorkStation</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$OrdenTrabajo->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>-->

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$OrdenTrabajo->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$OrdenTrabajo->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

    <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$OrdenTrabajo->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$OrdenTrabajo->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$OrdenTrabajo->WksMod}}" placeholder="WorkStation">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="EstadoOrden">Estado Orden</label>
          <input type="text" name="EstadoOrden" class="form-control" value="{{$OrdenTrabajo->EstadoOrden}}" placeholder="EstadoOrden">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Obsvacion">Observacion</label>
          <input type="text" name="Obsvacion" class="form-control" value="{{$OrdenTrabajo->Obsvacion}}" placeholder="Obsvacion">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaRegistro">Fecha Registro</label>
          <input type="text" name="FechaRegistro" class="form-control" value="{{$OrdenTrabajo->FechaRegistro}}" placeholder="FechaRegistro">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaProgramada">Fecha Programada</label>
          <input type="text" name="FechaProgramada" class="form-control" value="{{$OrdenTrabajo->FechaProgramada}}" placeholder="FechaProgramada">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaEjecutada">Fecha Ejecutada</label>
          <input type="text" name="FechaEjecutada" class="form-control" value="{{$OrdenTrabajo->FechaEjecutada}}" placeholder="FechaEjecutada">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdTaller">Id Taller</label>
          <input type="text" name="IdTaller" class="form-control" value="{{$OrdenTrabajo->IdTaller}}" placeholder="IdTaller">
        </div>
      </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
      </div>
    </div>

{!! Form::close() !!}
@endsection
