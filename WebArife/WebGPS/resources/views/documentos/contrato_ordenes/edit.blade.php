@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar contrato ordenes: {{$Contrato_Ordenes->IdContratoOrdenes}}</h3>
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

        {!!Form::model($Contrato_Ordenes,['method'=>'PATCH','route'=>['contrato_ordenes.update',$Contrato_Ordenes->IdContratoOrdenes]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdContratoOrdenes">Id Contrato Orden</label>
          <input type="text" name="IdContratoOrdenes" class="form-control" value="{{$Contrato_Ordenes->IdContratoOrdenes}}" placeholder="IdContratoOrdenes">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdContrato">IdContrato</label>
          <input type="text" name="IdContrato" class="form-control" value="{{$Contrato_Ordenes->IdContrato}}" placeholder="CodTipoServicio">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdOrden">Id Orden</label>
          <input type="text" name="IdOrden" class="form-control" value="{{$Contrato_Ordenes->IdOrden}}" placeholder="CodDocumentoAnexo">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">Fecha</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$Contrato_Ordenes->FchCrea}}" placeholder="FchCrea">
           </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="form-group">
            <label for="UsrCrea">Usuario Crea</label>
            <input type="text" name="UsrCrea" class="form-control" value="{{$Contrato_Ordenes->UsrCrea}}" placeholder="UsrCrea">
          </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$Contrato_Ordenes->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$Contrato_Ordenes->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$Contrato_Ordenes->WksMod}}" placeholder="WorkStation">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$Contrato_Ordenes->UsrMod}}" placeholder="Usuario">
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
