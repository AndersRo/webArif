@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Modelo: {{$Modelo->UsrCrea}}</h3>
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

        {!!Form::model($contrato,['method'=>'PATCH','route'=>['$contrato.update',$contrato->IdContrato]])!!}
        {{Form::token()}}
    <div class="row">

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdContrato">Id</label>
          <input type="text" name="IdContrato" class="form-control" value="{{$contrato->IdContrato}}" placeholder="IdContrato">
        </div>
      </div>


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="CodTipoServicio">CodTipoServicio</label>
          <input type="text" name="CodTipoServicio" class="form-control" value="{{$contrato->CodTipoServicio}}" placeholder="CodTipoServicio">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaInicio">Fecha Emision</label>
          <input type="text" name="FechaInicio" class="form-control" value="{{$contrato->FechaInicio}}" placeholder="FechaInicio">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaFin">Fecha Caducacion</label>
          <input type="text" name="FechaFin" class="form-control" value="{{$contrato->FechaFin}}" placeholder="FechaFin">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdCliente">IdCliente</label>
          <input type="text" name="IdCliente" class="form-control" value="{{$contrato->IdCliente}}" placeholder="IdCliente">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="CodTipoContrato">CodTipoContrato</label>
          <input type="text" name="CodTipoContrato" class="form-control" value="{{$contrato->CodTipoContrato}}" placeholder="CodTipoContrato">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdEmpresa">IdEmpresa</label>
          <input type="text" name="IdEmpresa" class="form-control" value="{{$contrato->IdEmpresa}}" placeholder="IdEmpresa">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdVehiculo">IdVehiculo</label>
          <input type="text" name="IdVehiculo" class="form-control" value="{{$contrato->IdVehiculo}}" placeholder="IdVehiculo">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="EstadoContrato">Estado Contrato</label>
          <input type="text" name="EstadoContrato" class="form-control" value="{{$contrato->EstadoContrato}}" placeholder="EstadoContrato">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">WorkStation</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$contrato->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$contrato->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$contrato->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$contrato->FchMod}}" placeholder="Fecha">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$contrato->UsrMod}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$contrato->WksMod}}" placeholder="WorkStation">
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
