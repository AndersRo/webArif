@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Mecanico</h3>
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

        {!! Form::open(array('url'=>'datos/mecanico','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="IdActor">Id</label>
              <input type="text" name="IdActor" class="form-control" placeholder="Id">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<div class="form-group">
              <label for="IdMecanico">Id Mecanico</label>
              <input type="text" name="IdMecanico" class="form-control" placeholder="Mecanico">
            </div>
        </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                 <label for="TipoPersona">Tipo Persona</label>
                 <select class="form-control" name="TipoPersona">
                    <option value="naturl">Natural</option>
                    <option value="jurdic">Juridica</option>
                 </select>
             </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="Apellido_Paterno">Apellido Paterno</label>
                <input type="text" name="Apellido_Paterno" class="form-control" required value="{{old('Apellido_Paterno')}}" placeholder="Apellido Paterno">
              </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
               <label for="Apellido_Materno">Apellido Materno</label>
               <input type="text" name="Apellido_Materno" class="form-control" required value="{{old('Apellido_Materno')}}" placeholder="Apellido Materno">
             </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                 <label for="PrimerNombre">Primer Nombre</label>
                 <input type="text" name="PrimerNombre" class="form-control" required value="{{old('PrimerNombre')}}" placeholder="Primer Nombre">
              </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
             <div class="form-group">
                <label for="SegundoNombre">Segundo Nombre</label>
                <input type="text" name="SegundoNombre" class="form-control" required value="{{old('SegundoNombre')}}" placeholder="Segundo Nombre">
             </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <label for="RazonSocial">Razon Social</label>
                <input type="text" name="RazonSocial" class="form-control" required value="{{old('RazonSocial')}}" placeholder="Razon Social">
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

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="CodigoIdentificacion">Codigo Identificacion</label>
              <input type="text" name="CodigoIdentificacion" class="form-control" required value="{{old('CodigoIdentificacion')}}" placeholder="Numero de Identificacion">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="RUC">RUC</label>
              <input type="text" name="RUC" class="form-control" required value="{{old('RUC')}}" placeholder="RUC">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
           <label for="IdEmpresa">Empresa</label>
             <select class="form-control" name="IdEmpresa">
              @foreach($empresa as $emp)
                <option value="{{$emp->IdEmpresa}}">{{$emp->NombreComercial}}</option>
              @endforeach
              </select>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
            <label for="UsrCrea">Usuario Actor</label>
            <input type="text" name="UsrCrea" class="form-control" required value="{{old('UsrCrea')}}" placeholder="Usuario">
          </div>
        </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrMod">Usuario Actor</label>
                  <input type="text" name="UsrMod" class="form-control" required value="{{old('UsrMod')}}" placeholder="Usuario">
              </div>
          </div>

          <!--<div class="form-group">
            <label for="FchCrea">Fecha Creacion</label>
            <input type="text" name="FchCrea" class="form-control" placeholder="Fecha">
          </div>-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="UsrCrea">Usuario</label>
              <input type="text" name="UsrCrea" class="form-control" placeholder="Usuario">
            </div>
        </div>
          <!--<div class="form-group">
            <label for="WksCrea">WorkStation</label>
            <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
          </div>-->
          <!--<div class="form-group">
            <label for="FchMod">Fecha Mod</label>
            <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
          </div>-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="UsrMod">Usuario Mod</label>
              <input type="text" name="UsrMod" class="form-control" placeholder="Usuario">
            </div>
          </div>
          <!--<div class="form-group">
            <label for="WksMod">WorkStation Mod</label>
            <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
          </div>-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <button class="btn btn-danger" type="reset">Eliminar</button>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection
