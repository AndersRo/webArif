@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Actor: {{$actor->PrimerNombre}}</h3>
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

        {!!Form::model($actor,['method'=>'PATCH','route'=>['actor.update',$actor->IdActor]])!!}
        {{Form::token()}}
    <div class="row">

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdActor">Id</label>
          <input type="text" name="IdActor" class="form-control" value="{{$actor->IdActor}}" placeholder="Id">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="TipoPersona">Tipo Persona</label>
          <input type="text" name="TipoPersona" class="form-control" value="{{$actor->TipoPersona}}" placeholder="TipoPersona">
        </div>
      </div>-->

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="TipoPersona">Tipo de Persona</label>
          <select class="form-control" name="TipoPersona">
              <option value="naturl">Natural</option>
              <option value="jurdic">Juridica</option>
          </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Apellido_Paterno">Apellido Paterno</label>
          <input type="text" name="Apellido_Paterno" class="form-control" value="{{$actor->Apellido_Paterno}}" placeholder="Apellido_Paterno">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Apellido_Materno">Apellido Materno</label>
          <input type="text" name="Apellido_Materno" class="form-control" value="{{$actor->Apellido_Materno}}" placeholder="Apellido_Materno">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="PrimerNombre">Primer Nombre</label>
          <input type="text" name="PrimerNombre" class="form-control" value="{{$actor->PrimerNombre}}" placeholder="Primer Nombre">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="SegundoNombre">Segundo Nombre</label>
          <input type="text" name="SegundoNombre" class="form-control" value="{{$actor->SegundoNombre}}" placeholder="Segundo Nombre">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RazonSocial">Razon Social</label>
          <input type="text" name="RazonSocial" class="form-control" value="{{$actor->RazonSocial}}" placeholder="RazonSocial">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="TipoDocumento">Tipo Documento</label>
          <select class="form-control" name="TipoDocumento">
            <option value="dni">DNI</option>
            <option value="crtex">Carnet de Extrangeria</option>
            <option value="Pasprt">Pasaporte</option>
          </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="CodigoIdentificacion">Codigo Identificacion</label>
          <input type="text" name="CodigoIdentificacion" class="form-control" value="{{$actor->CodigoIdentificacion}}" placeholder="CodigoIdentificacion">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RUC">RUC</label>
          <input type="text" name="RUC" class="form-control" value="{{$actor->RUC}}" placeholder="RUC">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
           <label for="IdEmpresa">Empresa</label>
          <select class="form-control" name="IdEmpresa">
           @foreach($empresa as $emp)
             <option value="{{$emp->IdEmpresa}}">{{$emp->NombreComercial}}</option>
           @endforeach
           </select>
          <!--<label for="IdEmpresa">Empresa</label>
          <input type="text" name="IdEmpresa" class="form-control" value="{{$actor->IdEmpresa}}" placeholder="IdEmpresa">-->
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" value="{{$actor->FchCrea}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" value="{{$actor->UsrCrea}}" placeholder="Usuario">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$actor->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$actor->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$actor->UsrMod}}" placeholder="Usuario">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$actor->WksMod}}" placeholder="WorkStation">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
      </div>
    </div>
        {!! Form::close() !!}
@endsection
