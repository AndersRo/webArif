@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Orden</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'documentos/ordentrabajo','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}


        <div class="form-group">
          <label for="IdOrden">Id</label>
          <input type="text" name="IdOrden" class="form-control" required value="{{old('IdOrden')}}" placeholder="Id Orden">
        </div>

        <div class="form-group">
          <label for="IdEmpresa">Id Empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" required value="{{old('IdEmpresa')}}" placeholder="Id Empresa">
        </div>

        <div class="form-group">
           <label for="IdMecanico">Id Mecanico</label>
            <input type="text" name="IdMecanico" class="form-control" required value="{{old('IdMecanico')}}" placeholder="Id Mecanico">
        </div>

        <div class="form-group">
           <label for="IdCliente">Id Cliente</label>
            <input type="text" name="IdCliente" class="form-control" required value="{{old('IdCliente')}}" placeholder="Id Cliente">
        </div>

         <div class="form-group">
           <label for="IdVehiculo">Id Vehiculo</label>
           <input type="text" name="IdVehiculo" class="form-control" required value="{{old('IdVehiculo')}}" placeholder="Id Vehiculo">
         </div>

         <div class="form-group">
            <label for="IdTaller">Id Taller</label>
             <input type="text" name="IdTaller" class="form-control" required value="{{old('IdCliente')}}" placeholder="Id Cliente">
         </div>

        <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" required value="{{old('UsrCrea')}}" placeholder="UsrCrea">
        </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" required value="{{old('UsrMod')}}" placeholder="Usuario">
        </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->

        <div class="form-group">
          <label for="EstadoOrden">Estado Orden</label>
          <input type="text" name="EstadoOrden" class="form-control" required value="{{old('EstadoOrden')}}" placeholder="EstadoOrden">
        </div>

        <div class="form-group">
          <label for="Obsvacion">Observacion</label>
          <input type="text" name="Obsvacion" class="form-control" required value="{{old('Obsvacion')}}" placeholder="Observacion">
        </div>

        <!--<div class="form-group">
          <label for="FechaRegistro">Fecha Registro</label>
          <input type="text" name="FechaRegistro" class="form-control" placeholder="FechaRegistro">
        </div>-->

        <div class="input-group date">
          <label for="FechaRegistro">Fecha Registro</label>
          <input type="text" class="form-control" name="FechaRegistro">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
          <script>
            $('.date').datepicker({
              format: 'yyyy/mm/dd',
              startDate: '-3d',
              language: "es",
              autoclose: true
            });
          </script>
        </div>


        <!--<div class="form-group">
          <label for="FechaProgramada">Fecha Programada</label>
          <input type="text" name="FechaProgramada" class="form-control" placeholder="FechaProgramada">
        </div>-->

        <div class="input-group date">
          <label for="FechaProgramada">Fecha Programada</label>
          <input type="text" class="form-control" name="FechaProgramada">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
          <script>
            $('.date').datepicker({
              format: 'yyyy/mm/dd',
              startDate: '-3d',
              language: "es",
              autoclose: true
            });
          </script>
        </div>

        <!--<div class="form-group">
          <label for="FechaEjecutada">Fecha ejecutada</label>
          <input type="text" name="FechaEjecutada" class="form-control" placeholder="FechaEjecutada">
        </div>-->

        <div class="input-group date">
          <label for="FechaEjecutada">Fecha Ejecutada</label>
          <input type="text" class="form-control" name="FechaEjecutada">
          <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
          </div>
          <script>
            $('.date').datepicker({
              format: 'yyyy/mm/dd',
              startDate: '-3d',
              language: "es",
              autoclose: true
            });
          </script>
        </div>

      <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
