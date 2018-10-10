@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar accesoplataforma: {{$accesoplataforma->UsrCrea}}</h3>
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

        {!!Form::model($accesoplataforma,['method'=>'PATCH','route'=>['$accesoplataforma.update',$accesoplataforma->IdAcceso]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAcceso">Id Acceso</label>
          <input type="text" name="IdAcceso" class="form-control" value="{{$accesoplataforma->IdAcceso}}" placeholder="IdAcceso">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FlgAccesoApp">Flg AccesoApp</label>
          <input type="text" name="FlgAccesoApp" class="form-control" value="{{$accesoplataforma->FlgAccesoApp}}" placeholder="FlgAccesoApp">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="FlgAccesoWeb">Flg AccesoWeb</label>
       <input type="text" name="FlgAccesoWeb" class="form-control" value="{{$accesoplataforma->FlgAccesoWeb}}" placeholder="FlgAccesoWeb">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="IdEmpresa">Id Empresa</label>
       <input type="text" name="IdEmpresa" class="form-control" value="{{$accesoplataforma->IdEmpresa}}" placeholder="IdEmpresa">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="MaxConexiones">Max Conexiones</label>
       <input type="text" name="MaxConexiones" class="form-control" value="{{$accesoplataforma->MaxConexiones}}" placeholder="MaxConexiones">
       </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="LoginAcceso">Login Acceso</label>
       <input type="text" name="LoginAcceso" class="form-control" value="{{$accesoplataforma->LoginAcceso}}" placeholder="LoginAcceso">
       </div>
    </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="ContrasnaPlataforma">Contraseña Plataforma</label>
       <input type="text" name="ContrasnaPlataforma" class="form-control" value="{{$accesoplataforma->ContrasnaPlataforma}}" placeholder="ContrasnaPlataforma">
       </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="ContrasenaComados">Contraseña Comandos</label>
       <input type="text" name="ContrasenaComados" class="form-control" value="{{$accesoplataforma->ContrasenaComados}}" placeholder="ContrasenaComados">
       </div>
  </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">Crear Fecha</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$accesoplataforma->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$accesoplataforma->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$accesoplataforma->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$accesoplataforma->FchMod}}" placeholder="Fecha">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$accesoplataforma->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$accesoplataforma->WksMod}}" placeholder="WorkStation">
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
