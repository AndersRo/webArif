@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Contrato Ordenes</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'documentos/contrato_ordenes','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}

        <div class="form-group">
          <label for="IdContratoOrdenes">Id Contrato Orden</label>
          <input type="text" name="IdContratoOrdenes" class="form-control" placeholder="IdContrato">
        </div>

        <div class="form-group">
          <label for="IdContrato">Contrato</label>
          <select class="form-control selectpicker" name="IdContrato" data-live-search="true">
            @foreach($contrato as $cnt)
              <option value="{{$cnt->IdContrato}}">{{$cnt->CodTipoServicio}}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="IdOrden">Orden</label>
          <select class="form-control selectpicker" name="IdOrden" data-live-search="true">
            @foreach($ordentrabajo as $odt)
            <option value="{{$odt->IdOrden}}">{{$odt->Obsvacion}}</option>
            @endforeach
          </select>
        </div>

      <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" placeholder="UsrCrea">
        </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="form-group">
          <label for="UsrMod">Modificar Usuario</label>
          <input type="text" name="UsrMod" class="form-control" placeholder="Usuario">
        </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->

      <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
