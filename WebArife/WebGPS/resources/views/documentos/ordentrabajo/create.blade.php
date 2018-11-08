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
      </div>
    </div>
        {!! Form::open(array('url'=>'documentos/ordentrabajo','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}
      <div class="row">
       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdOrden">Id</label>
          <input type="text" name="IdOrden" class="form-control" required value="{{old('IdOrden')}}" placeholder="Id Orden">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
         <label for="IdEmpresa">Empresa</label>
           <select class="form-control selectpicker" name="IdEmpresa" data-live-search="true">
            @foreach($empresa as $emp)
              <option value="{{$emp->IdEmpresa}}">{{$emp->NombreComercial}}</option>
            @endforeach
            </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
           <label for="IdMecanico">Mecanico</label>
           <select class="form-control selectpicker" name="IdMecanico" data-live-search="true">
             @foreach($mecanico as $mec)
             <option value="{{$mec->IdMecanico}}">{{$mec->PrimerNombre}}</option>
             @endforeach
           </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
           <label for="IdCliente">Cliente</label>
           <select class="form-control selectpicker" name="IdCliente" data-live-search="true">
             @foreach($cliente as $cli)
             <option value="{{$cli->IdCliente}}">{{$cli->PrimerNombre}}</option>
             @endforeach
           </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
         <div class="form-group">
           <label for="IdVehiculo">Vehiculo</label>
           <select class="form-control selectpicker" name="IdVehiculo" data-live-search="true">
             @foreach($vehiculo as $veh)
             <option value="{{$veh->IdVehiculo}}">{{$veh->Placa}}</option>
             @endforeach
           </select>
         </div>
       </div>

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
         <div class="form-group">
            <label for="IdTaller">Taller</label>
            <select class="form-control selectpicker" name="IdTaller" data-live-search="true">
              @foreach($taller as $tal)
              <option value="{{$tal->IdTaller}}">{{$tal->Descripcion}}</option>
              @endforeach
            </select>
         </div>
       </div>

        <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" required value="{{old('UsrCrea')}}" placeholder="UsrCrea">
        </div>
      </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" required value="{{old('UsrMod')}}" placeholder="Usuario">
        </div>
      </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="EstadoOrden">Estado Orden</label>
          <input type="text" name="EstadoOrden" class="form-control" required value="{{old('EstadoOrden')}}" placeholder="EstadoOrden">
        </div>
      </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Obsvacion">Observacion</label>
          <input type="text" name="Obsvacion" class="form-control" required value="{{old('Obsvacion')}}" placeholder="Observacion">
        </div>
      </div>

        <!--<div class="form-group">
          <label for="FechaRegistro">Fecha Registro</label>
          <input type="text" name="FechaRegistro" class="form-control" placeholder="FechaRegistro">
        </div>-->
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
              autoclose: true,
              orientation: "auto left",
              forceParse: false,
              todayHighlight: true,
              toggleActive: true
            }).datepicker("setDate", new Date());
          </script>
        </div>
      </div>


        <!--<div class="form-group">
          <label for="FechaProgramada">Fecha Programada</label>
          <input type="text" name="FechaProgramada" class="form-control" placeholder="FechaProgramada">
        </div>-->
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
              autoclose: true,
              orientation: "auto left",
              forceParse: false,
              todayHighlight: true,
              toggleActive: true
            }).datepicker("setDate", new Date());;
          </script>
        </div>
      </div>

        <!--<div class="form-group">
          <label for="FechaEjecutada">Fecha ejecutada</label>
          <input type="text" name="FechaEjecutada" class="form-control" placeholder="FechaEjecutada">
        </div>-->

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
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
