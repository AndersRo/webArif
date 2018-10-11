@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar accesoplataforma: {{$accesosplataforma->IdAcceso}}</h3>
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

        {!!Form::model($accesosplataforma,['method'=>'PATCH','route'=>['AccesosPlataforma.update',$accesosplataforma->IdAcceso]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAcceso">Id Acceso</label>
          <input type="text" name="IdAcceso" class="form-control" value="{{$accesosplataforma->IdAcceso}}" placeholder="IdAcceso">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
         <div class="form-group">
           <label for="IdCliente">Id Cliente</label>
           <input type="text" name="IdCliente" class="form-control" value="{{$accesosplataforma->IdCliente}}" placeholder="IdCliente">
         </div>
       </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FlgAccesoApp">Flg AccesoApp</label>
          <input type="text" name="FlgAccesoApp" class="form-control" value="{{$accesosplataforma->FlgAccesoApp}}" placeholder="FlgAccesoApp">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="FlgAccesoWeb">Flg AccesoWeb</label>
       <input type="text" name="FlgAccesoWeb" class="form-control" value="{{$accesosplataforma->FlgAccesoWeb}}" placeholder="FlgAccesoWeb">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="IdEmpresa">Id Empresa</label>
       <input type="text" name="IdEmpresa" class="form-control" value="{{$accesosplataforma->IdEmpresa}}" placeholder="IdEmpresa">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="MaxConexiones">Max Conexiones</label>
       <input type="text" name="MaxConexiones" class="form-control" value="{{$accesosplataforma->MaxConexiones}}" placeholder="MaxConexiones">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="LoginAcceso">Login Acceso</label>
       <input type="text" name="LoginAcceso" class="form-control" value="{{$accesosplataforma->LoginAcceso}}" placeholder="LoginAcceso">
       </div>
    </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="ContrasnaPlataforma">Contraseña Plataforma</label>
       <input type="text" name="ContrasnaPlataforma" class="form-control" value="{{$accesosplataforma->ContrasnaPlataforma}}" placeholder="ContrasnaPlataforma">
       </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="ContrasenaComados">Contraseña Comandos</label>
       <input type="text" name="ContrasenaComados" class="form-control" value="{{$accesosplataforma->ContrasenaComados}}" placeholder="ContrasenaComados">
       </div>
  </div>

  <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="FchCrea">Crear Fecha</label>
      <input type="text" name="FchCrea" class="form-control" value="{{$accesosplataforma->FchCrea}}" placeholder="FchCrea">
    </div>
  </div>-->

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
    <div class="form-group">
      <label for="UsrCrea">Crear Usuario</label>
      <input type="text" name="UsrCrea" class="form-control" value="{{$accesosplataforma->UsrCrea}}" placeholder="UsrCrea">
    </div>
  </div>

   <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$accesosplataforma->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

     <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$accesosplataforma->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$accesosplataforma->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$accesosplataforma->WksMod}}" placeholder="WorkStation">
        </div>
      </div>-->

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <div class="form-group">
        <label for="EstadoAcceso">Estado Acceso</label>
        <input type="text" name="EstadoAcceso" class="form-control" value="{{$accesosplataforma->EstadoAcceso}}" placeholder="EstadoAcceso">
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
