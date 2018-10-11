@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Accesos Plataforma</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'plataforma/AccesosPlataforma','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}

        <div class="form-group">
          <label for="IdAcceso">Acesso</label>
          <input type="text" name="IdAcceso" class="form-control" required value="{{old('IdAcceso')}}" placeholder="IdAcceso">
       </div>

       <div class="form-group">
            <label for="IdCliente">Id Cliente</label>
            <input type="text" name="IdCliente" class="form-control" required value="{{old('IdCliente')}}" placeholder="IdCliente">
       </div>

        <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="form-group">
             <label for="FlgAccesoApp">Flg AccesoApp</label>
             <input type="text" name="FlgAccesoApp" class="form-control" required value="{{old('FlgAccesoApp')}}" placeholder="FlgAccesoApp">
        </div>

        <div class="form-group">
             <label for="FlgAccesoWeb">Flg AccesoWeb</label>
             <input type="text" name="FlgAccesoWeb" class="form-control" required value="{{old('FlgAccesoWeb')}}" placeholder="FlgAccesoWeb">
        </div>

        <div class="form-group">
          <label for="UsrCrea">usuario</label>
          <input type="text" name="UsrCrea" class="form-control" required value="{{old('UsrCrea')}}" placeholder="UsrCrea">
        </div>

        <div class="form-group">
          <label for="IdEmpresa">Empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" required value="{{old('IdEmpresa')}}" placeholder="IdEmpresa">
        </div>

        <div class="form-group">
          <label for="MaxConexiones">Max Conexiones</label>
          <input type="text" name="MaxConexiones" class="form-control" required value="{{old('MaxConexiones')}}" placeholder="MaxConexiones">
        </div>

        <div class="form-group">
          <label for="LoginAcceso">Login Acceso</label>
          <input type="text" name="LoginAcceso" class="form-control" required value="{{old('LoginAcceso')}}" placeholder="LoginAcceso">
        </div>

        <div class="form-group">
          <label for="ContrasnaPlataforma">Contraseña Plataforma</label>
          <input type="text" name="ContrasnaPlataforma" class="form-control" required value="{{old('ContrasnaPlataforma')}}" placeholder="ContrasnaPlataforma">
        </div>

        <div class="form-group">
          <label for="ContrasenaComados">Contrasena Comados</label>
          <input type="text" name="ContrasenaComados" class="form-control" required value="{{old('ContrasenaComados')}}" placeholder="Contrasena Comandos">
        </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" required value="{{old('WksCrea')}}" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" required value="{{old('UsrMod')}}" placeholder="Usuario">
        </div>

        <div class="form-group">
          <label for="EstadoAcceso">Estado Acceso</label>
          <input type="text" name="EstadoAcceso" class="form-control" required value="{{old('EstadoAcceso')}}" placeholder="EstadoAcceso">
        </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" required value="{{old('WksMod')}}" placeholder="WorkStation">
        </div>-->

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
