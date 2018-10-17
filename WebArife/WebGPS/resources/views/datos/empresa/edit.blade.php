@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Empresa: {{$empresa->RazonSocial}}</h3>
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

        {!!Form::model($empresa,['method'=>'PATCH','route'=>['empresa.update',$empresa->IdEmpresa],'files'=>'true'])!!}
        {{Form::token()}}
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdEmpresa">Id</label>
          <input type="text" name="IdEmpresa" value="{{$empresa->IdEmpresa}}" class="form-control" placeholder="Id">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RUC">RUC</label>
          <input type="text" name="RUC" value="{{$empresa->RUC}}" class="form-control" placeholder="RUC">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RazonSocial">Razon Social</label>
          <input type="text" name="RazonSocial" value="{{$empresa->RazonSocial}}" class="form-control" placeholder="Razon Social">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="NombreComercial">Nombre Comercial</label>
          <input type="text" name="NombreComercial" value="{{$empresa->NombreComercial}}" class="form-control" placeholder="Nombre Comercial">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RutaLogo">Logo</label>
          <input type="file" name="RutaLogo" value="{{$empresa->RutaLogo}}" class="form-control-file">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" value="{{$empresa->UsrCrea}}" class="form-control" placeholder="Usuario">
        </div>
      </div>
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" value="{{$empresa->WksCrea}}" class="form-control" placeholder="WorkStation">
        </div>
      </div>-->
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" value="{{$empresa->FchCrea}}" class="form-control" placeholder="Fecha">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" value="{{$empresa->FchMod}}" class="form-control" placeholder="Fecha">
        </div>
      </div>-->
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" value="{{$empresa->UsrMod}}" class="form-control" placeholder="Usuario">
        </div>
      </div>
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" value="{{$empresa->WksMod}}" class="form-control" placeholder="WorkStation">
        </div>
      </div>-->
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Representante">Representante</label>
          <input type="text" name="Representante" value="{{$empresa->Representante}}" class="form-control" placeholder="Representante">
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
