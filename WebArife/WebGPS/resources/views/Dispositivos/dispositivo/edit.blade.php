@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Dispositivos: {{$Dispositivos->IdDispositivos}}</h3>
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

        {!!Form::model($dispositivos,['method'=>'PATCH','route'=>['dispositivos.update',$dispositivos->Iddispositivos]])!!}
        {{Form::token()}}

    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdDispositivos">IdDispositivos</label>
          <input type="text" name="IdComandos" class="form-control" value="{{$comandos->IdComandos}}" placeholder="IdComandos">
        </div>
      </div>

      <div class="col-lg-6 col-sm-  6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Serie">Serie</label>
          <input type="text" name="Serie" class="form-control" value="{{$dispositivos->Serie}}" placeholder="Serie">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IMEI">IMEI</label>
          <input type="text" name="IMEI" class="form-control" value="{{$dispositivos->IMEI}}" placeholder="IMEI">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdModelo">IdModelo</label>
          <input type="text" name="IdModelo" class="form-control" value="{{$dispositivos->IdModelo}}" placeholder="IdModelo">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="NroSim">NroSim</label>
          <input type="text" name="NroSim" class="form-control" value="{{$dispositivos->NroSim}}" placeholder="NroSim">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
        <label for="NroIDN">NroIDN</label>
        <input type="text" name="NroIDN" class="form-control" value="{{$dispositivos->NroIDN}}" placeholder="NroIDN">
        </div>
    </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <div class="form-group">
      <label for="IdEmpresa">IdEmpresa</label>
      <input type="text" name="IdEmpresa" class="form-control" value="{{$dispositivos->IdEmpresa}}" placeholder="IdEmpresa">
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
