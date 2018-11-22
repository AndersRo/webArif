@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Mecanico: {{$mecanico->IdMecanico}}</h3>
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

        {!!Form::model($mecanico,['method'=>'PATCH','route'=>['mecanico.update',$mecanico->IdActor]])!!}
        {{Form::token()}}
        <div class="row">



          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    				<div class="form-group">
              <!--<label for="IdMecanico">Mecanico</label>-->
              <input type="hidden" name="IdMecanico" value="{{$mecanico->IdMecanico}}" class="form-control" placeholder="Mecanico">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <!--<label for="IdActor">Actor</label>-->
              <input type="hidden" name="IdActor" value="{{$mecanico->IdActor}}" class="form-control" placeholder="Actor">
            </div>
          </div>

          <!--<div class="form-group">
            <label for="FchCrea">Fecha Creacion</label>
            <input type="text" name="FchCrea" value="{{$mecanico->FchCrea}}" class="form-control" placeholder="Fecha">
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
              <input type="text" name="RUC" class="form-control" value="{{$act->Rem}}" placeholder="RUC">
              @endforeach
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
             <label for="IdEmpresa">Empresa</label>
               <select class="form-control" name="IdEmpresa">
                @foreach($actor as $act)
                  <option value="{{$act->IdEmpresa}}">{{$act->NombreComercial}}</option>
                @endforeach
                </select>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="UsrCrea">Usuario</label>
              <input type="text" name="UsrCrea" value="{{$mecanico->UsrCrea}}" class="form-control" placeholder="Usuario">
            </div>
          </div>
          <!--<div class="form-group">
            <label for="WksCrea">WorkStation</label>
            <input type="text" name="WksCrea" value="{{$mecanico->WksCrea}}" class="form-control" placeholder="WorkStation">
          </div>-->
          <!--<div class="form-group">
            <label for="FchMod">Fecha Mod</label>
            <input type="text" name="FchMod" value="{{$mecanico->FchMod}}" class="form-control" placeholder="Fecha">
          </div>-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="UsrMod">Usuario Mod</label>
              <input type="text" name="UsrMod" value="{{$mecanico->UsrMod}}" class="form-control" placeholder="Usuario">
            </div>
          </div>

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
              <input type="text" name="UsrMod" class="form-control" value="{{$mecanico->UsrMod}}" placeholder="Usuario">
              @endforeach
            </div>
          </div>

          <!--<div class="form-group">
            <label for="WksMod">WorkStation Mod</label>
            <input type="text" name="WksMod" value="{{$mecanico->WksMod}}" class="form-control" placeholder="WorkStation">
          </div>-->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <button class="btn btn-primary" type="submit">Guardar</button>
              <button class="btn btn-danger" type="reset">Eliminar</button>
            </div>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
@endsection
