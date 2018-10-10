@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Vehiculo: {{$vehiculo->IdVehiculo}}</h3>
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

        {!!Form::model($vehiculo,['method'=>'PATCH','route'=>['vehiculo.update',$vehiculo->IdVehiculo]])!!}
        {{Form::token()}}
    <div class="row">


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdVehiculo">IdVehiculo</label>
          <input type="text" name="IdVehiculo" class="form-control" value="{{$vehiculo->IdVehiculo}}" placeholder="IdVehiculo">
        </div>
      </div>

      <div class="col-lg-6 col-sm-  6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Placa">Placa</label>
          <input type="text" name="Placa" class="form-control" value="{{$vehiculo->Placa}}" placeholder="Placa">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Chasis">Primer Nombre</label>
          <input type="text" name="Chasis" class="form-control" value="{{$vehiculo->Chasis}}" placeholder="Chasis">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Motor">Motor</label>
          <input type="text" name="Motor" class="form-control" value="{{$vehiculo->Motor}}" placeholder="Motor">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Modelo">Modelo</label>
          <input type="text" name="Modelo" class="form-control" value="{{$vehiculo->Modelo}}" placeholder="Modelo">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Color">color</label>
          <input type="text" name="Color" class="form-control" value="{{$vehiculo->Color}}" placeholder="Color">
        </div>
      </div>


      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" value="{{$vehiculo->FchCrea}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" value="{{$vehiculo->UsrCrea}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$vehiculo->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$vehiculo->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$vehiculo->UsrMod}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$vehiculo->WksMod}}" placeholder="WorkStation">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RutaReferencia">Ruta Referencia</label>
          <input type="text" name="RutaReferencia" class="form-control" value="{{$vehiculo->RutaReferencia}}" placeholder="Ruta Referencia">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RutaTarjeta">Ruta Tarjeta</label>
          <input type="text" name="RutaTarjeta" class="form-control" value="{{$vehiculo->RutaTarjeta}}" placeholder="Ruta Tarjeta">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdEmpresa">Id Empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" value="{{$vehiculo->IdEmpresa}}" placeholder="IdEmpresa">
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
