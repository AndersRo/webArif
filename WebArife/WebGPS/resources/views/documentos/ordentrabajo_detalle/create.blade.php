@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Orden Trabajo Detalle</h3>
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

        {!! Form::open(array('url'=>'documentos/ordentrabajo_detalle','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="form-group">
            <label for="IdOrdenDetalle">Id</label>
            <input type="text" name="IdOrdenDetalle" class="form-control" placeholder="IdOrdenDetalle">
          </div>
        </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="IdOrden">Orden</label>
             <select class="form-control selectpicker" name="IdOrden" data-live-search="true">
               @foreach($ordentrabajo as $ord)
               <option value="{{$ord->IdOrden}}">{{$ord->IdOrden}}</option>
               @endforeach
             </select>
           </div>
         </div>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
            <div class="form-group">
              <label for="IdDispositivo">Dispositivo GPS</label>
              <select class="form-control selectpicker" name="IdDispositivo" data-live-search="true">
                @foreach($dispositivos as $dis)
                <option value="{{$dis->IdDispositivo}}">{{$dis->NroSim}}</option>
                @endforeach
              </select>
            </div>
          </div>

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
           <label for="CodTipoTrabajo">Tipo de Trabajo</label>
           <select class="form-control" name="CodTipoTrabajo">
             <option value="#" selected>SELECCIONE...</option>
             <option value="Instal">NUEVA INSTALACION</option>
             <option value="Renova">RENOVACION</option>
           </select>
        </div>
      </div>

        <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
          <div class="form-group">
           <label for="UsrCrea">Usuario</label>
           <input type="text" name="UsrCrea" class="form-control" placeholder="UsrCrea">
          </div>
        </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Mod Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Modificar Usuario</label>
          <input type="text" name="UsrMod" class="form-control" placeholder="Usuario">
        </div>
      </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FechaInicio">FechaInicio</label>
          <input type="text" name="FechaInicio" class="form-control" placeholder="FechaInicio">
        </div>-->

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <div class="input-group date">
            <label for="FechaInicio">Fecha Inicio</label>
            <input type="text" class="form-control" name="FechaInicio">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
            <script>
              $('.date').datepicker({
                format: 'yyyy/mm/dd',
                startDate: '-3d',
                language: "es",
                autoclose: true,
                orientation: "auto left",
                forceParse: false,
                todayHighlight: true,
                toggleActive: true
              }).datepicker("setDate", new Date());
            </script>
          </div>
        </div>
      </div>


        <!--<div class="form-group">
          <label for="FechaFin">FechaFin</label>
           <input type="text" name="FechaFin" class="form-control" placeholder="FechaFin">
        </div>-->

        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <div class="input-group date">
            <label for="FechaFin">Fecha Fin</label>
            <input type="text" class="form-control" name="FechaFin">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
            <script>
              $('.date').datepicker({
                format: 'yyyy/mm/dd',
                startDate: '-3d',
                language: "es",
                autoclose: true,
                orientation: "auto left",
                forceParse: false,
                todayHighlight: true,
                toggleActive: true
              });
            </script>
          </div>
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
