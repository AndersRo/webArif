@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Cliente: {{$cliente->PrimerNombre}}</h3>
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

        {!!Form::model($cliente,['method'=>'PATCH','route'=>['cliente.update',$cliente->IdActor]])!!}
        {{Form::token()}}
    <div class="row">
      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          
          <input type="hidden" name="IdCliente" class="form-control" value="{{$cliente->IdCliente}}" placeholder="Id Cliente">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">

          <input type="hidden" name="IdActor" class="form-control" value="{{$cliente->IdActor}}" placeholder="Id Actor">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdActor">Id</label>
          <input type="text" name="IdActor" class="form-control" value="{{$cliente->IdActor}}" placeholder="Id">
        </div>
      </div>-->


      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <div class="form-group">
             <label for="TipoPersona">Tipo Persona</label>
             <select class="form-control" name="TipoPersona">
                <option value="naturl">Natural</option>
                <option value="jurdic">Juridica</option>
             </select>
         </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Apellido_Paterno">Apellido Paterno</label>
          <input type="text" name="Apellido_Paterno" class="form-control" value="{{$cliente->Apellido_Paterno}}" placeholder="Apellido_Paterno">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
           <label for="Apellido_Paterno">Apellido Paterno</label>
           @foreach($actor as $act)
             <input type="text" name="Apellido_Paterno" class="form-control" value="{{$act->Apellido_Paterno}}" placeholder="Apellido_Paterno">
           @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Apellido_Materno">Apellido Materno</label>
          @foreach($actor as $act)
          <input type="text" name="Apellido_Materno" class="form-control" value="{{$act->Apellido_Materno}}" placeholder="Apellido_Materno">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="PrimerNombre">Primer Nombre</label>
          @foreach($actor as $act)
          <input type="text" name="PrimerNombre" class="form-control" value="{{$act->PrimerNombre}}" placeholder="Primer Nombre">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="SegundoNombre">Segundo Nombre</label>
          @foreach($actor as $act)
          <input type="text" name="SegundoNombre" class="form-control" value="{{$act->SegundoNombre}}" placeholder="Segundo Nombre">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RazonSocial">Razon Social</label>
          @foreach($actor as $act)
          <input type="text" name="RazonSocial" class="form-control" value="{{$act->RazonSocial}}" placeholder="RazonSocial">
          @endforeach
        </div>
      </div>

      <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="TipoDocumento">Tipo Documento</label>
          <select class="form-control" name="TipoDocumento">
            <option value="dni">DNI</option>
            <option value="crtex">Carnet de Extrangeria</option>
            <option value="Pasprt">Pasaporte</option>
          </select>
        </div>
      </div>-->

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
          <label for="TipoDocumento">Tipo Documento</label>
          @foreach($actor as $act)
          <input type="text" name="TipoDocumento" class="form-control" value="{{$act->TipoDocumento}}" placeholder="TipoDocumento" readonly>
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="CodigoIdentificacion">Codigo Identificacion</label>
          @foreach($actor as $act)
          <input type="text" name="CodigoIdentificacion" class="form-control" value="{{$act->CodigoIdentificacion}}" placeholder="CodigoIdentificacion">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="RUC">RUC</label>
          @foreach($actor as $act)
          <input type="text" name="RUC" class="form-control" value="{{$act->RUC}}" placeholder="RUC">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
         <label for="IdEmpresa">Cliente</label>
           <select class="form-control" name="IdEmpresa">
            @foreach($actor as $act)
              <option value="{{$act->IdEmpresa}}">{{$act->NombreComercial}}</option>
            @endforeach
            </select>
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" value="{{$cliente->FchCrea}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          @foreach ($actor as $act)
          <input type="text" name="UsrCrea" class="form-control" value="{{$act->UsrCrea}}" placeholder="Usuario">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          @foreach ($actor as $act)
          <input type="text" name="UsrMod" class="form-control" value="{{$cliente->UsrMod}}" placeholder="Usuario">
          @endforeach
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <!--@foreach($actor as $act)-->
          <input type="text" name="UsrCrea" class="form-control" value="{{$act->UsrCrea}}" placeholder="Usuario">
          <!--@endforeach-->
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$cliente->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$cliente->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <!--@foreach($actor as $act)-->
          <input type="text" name="UsrMod" class="form-control" value="{{$cliente->UsrMod}}" placeholder="Usuario">
          <!--@endforeach-->
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$cliente->WksMod}}" placeholder="WorkStation">
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
