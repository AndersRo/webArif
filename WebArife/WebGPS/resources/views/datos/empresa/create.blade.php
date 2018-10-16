@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nueva Empresa</h3>
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

        {!!Form::open(array('url'=>'datos/empresa','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
        {{Form::token()}}

    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdEmpresa">Id</label>
          <input type="text" name="IdEmpresa" required value="{{old('IdEmpresa')}}" class="form-control" placeholder="Id">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RUC">RUC</label>
          <input type="text" name="RUC" required value="{{old('RUC')}}" class="form-control" placeholder="RUC">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RazonSocial">Razon Social</label>
          <input type="text" name="RazonSocial" required value="{{old('RazonSocial')}}" class="form-control" placeholder="Razon Social">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="NombreComercial">Nombre Comercial</label>
          <input type="text" name="NombreComercial" required value="{{old('NombreComercial')}}" class="form-control" placeholder="Nombre Comercial">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RutaLogo">Logo</label>
            <input type="file" name="RutaLogo" class="form-control-file">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" required value="{{old('UsrCrea')}}" class="form-control" placeholder="Usuario">
        </div>
      </div>
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" required value="{{old('WorkStation')}}" class="form-control" placeholder="WorkStation">
        </div>
      </div>-->
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" required value="{{old('FchCrea')}}" class="form-control" placeholder="Fecha">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" required value="{{old('FchMod')}}" class="form-control" placeholder="Fecha">
        </div>
      </div>-->
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" required value="{{old('UsrMod')}}" class="form-control" placeholder="Usuario">
        </div>
      </div>
      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" required value="{{old('WksMod')}}" class="form-control" placeholder="WorkStation">
        </div>
      </div>-->
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Representante">Representante</label>
          <input type="text" name="Representante" required value="{{old('Representante')}}" class="form-control" placeholder="Representante">
        </div>
      </div>
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
      </div>
    </div>
        {!!Form::close()!!}
@endsection
