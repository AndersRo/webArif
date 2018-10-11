@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Contrato</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'documentos/contrato','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}

        <div class="form-group">
          <label for="IdContrato">Id</label>
          <input type="text" name="IdContrato" class="form-control" required value="{{old('IdContrato')}}" placeholder="Id">
        </div>

        <div class="form-group">
          <label for="CodTipoServicio">tipo servicio</label>
          <input type="text" name="CodTipoServicio" class="form-control" required value="{{old('CodTipoServicio')}}" placeholder="CodTipoServicio">
        </div>

        <!--<div class="form-group">
          <label for="FechaInicio">Fecha Inicio</label>
          <input type="text" name="FechaInicio" class="form-control" placeholder="FechaInicio">
        </div>-->

        <div class="input-group date">
          <label for="FechaInicio">Fecha Inicio</label>
          <input type="text" class="form-control" name="FechaInicio" required value="{{old('FechaInicio')}}">
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
          <label for="FechaFin">Fecha Fin</label>
          <input type="text" name="FechaFin" class="form-control" placeholder="FechaFin">
        </div>-->

        <div class="input-group date">
          <label for="FechaFin">Fecha Fin</label>
          <input type="text" class="form-control" name="FechaFin" required value="{{old('FechaFin')}}">
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
          <label for="IdCliente">Id Cliente</label>
          <input type="text" name="IdCliente" class="form-control" required value="{{old('IdCliente')}}" placeholder="IdCliente">
        </div>

        <div class="form.group">
          <label for="CodTipoContrato">Cod Tipo de Contrato</label>
          <input type="text" name="CodTipoContrato" class="form-control" required value="{{old('CodTipoContrato')}}"  placeholder="CodTipoContrato">
        </div>

     <div class ="form-group">
          <label for="IdEmpresa">iId empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" required value="{{old('IdEmpresa')}}" placeholder="IdEmpresa">
     </div>

     <div class ="form.group">
       <label for="IdVehiculo">id vehiculo </label>
       <input for="'text'" name="IdVehiculo" class="form-control" required value="{{old('IdVehiculo')}}" placeholder="IdVehiculo">
     </div>

     <div class="form-group">
       <label for="EstadoContrato">Estado Contrato</label>
       <input type ="text" name="EstadoContrato" class="form-control" required value="{{old('EstadoContrato')}}" placeholder="Estado Contrato">
     </div>

      <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="form-group">
          <label for="UsrCrea">usuario</label>
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
          <label for="UsrMod">Modificar Usuario</label>
          <input type="text" name="UsrMod" class="form-control" required value="{{old('UsrMod')}}" placeholder="Usuario">
        </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
