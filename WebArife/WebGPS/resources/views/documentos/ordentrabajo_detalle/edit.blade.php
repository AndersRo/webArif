@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar ordentrabajo_detalle: {{$ordentrabajo_detalle->IdOrdenDetalle}}</h3>
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

        {!!Form::model($ordentrabajo_detalle,['method'=>'PATCH','route'=>['ordentrabajo_detalle.update',$ordentrabajo_detalle->IdOrdenDetalle]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdOrdenDetalle">Id OrdenDetalle</label>
          <input type="text" name="IdOrdenDetalle" class="form-control" value="{{$ordentrabajo_detalle->IdOrdenDetalle}}" placeholder="IdOrdenDetalle">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdOrden">Orden</label>
          <select class="form-control" name="IdOrden">
            @foreach($ordentrabajo as $ord)
            <option value="{{$ord->IdOrden}}">{{$ord->IdOrden}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
         <div class="form-group">
           <label for="IdDispositivo">Dispositivo</label>
           <select class="form-control" name="IdDispositivo">
             @foreach($dispositivo as $dis)
             <option value="{{$dis->IdDispositivo}}">{{$dis->NroSim}}</option>
             @endforeach
           </select>
         </div>
       </div>

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="form-group">
            <label for="CodTipoTrabajo">CodTipoTrabajo</label>
            <input type="text" name="CodTipoTrabajo" class="form-control" value="{{$ordentrabajo_detalle->CodTipoTrabajo}}" placeholder="CodTipoTrabajo">
          </div>
        </div>


        <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">WorkStation</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$ordentrabajo_detalle->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>-->

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$ordentrabajo_detalle->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$ordentrabajo_detalle->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>-->

    <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$ordentrabajo_detalle->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$ordentrabajo_detalle->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$ordentrabajo_detalle->WksMod}}" placeholder="WorkStation">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaInicio">Fecha inicio</label>
          <input type="text" name="FechaInicio" class="form-control" value="{{$ordentrabajo_detalle->FechaInicio}}" placeholder="FechaInicio">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FechaFin">Fecha Fin</label>
          <input type="text" name="FechaFin" class="form-control" value="{{$ordentrabajo_detalle->FechaFin}}" placeholder="FechaFin">
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
