@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Taller</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'datos/vehiculo','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}

        <div class="form-group">
          <label for="IdVehiculo">Id</label>
          <input type="text" name="IdVehiculo" class="form-control" placeholder="Id">
        </div>

        <div class="form-group">
          <label for="Placa">Placa</label>
          <input type="text" name="Placa" class="form-control" placeholder="Placa">
        </div>

        <div class="form-group">
          <label for="Chasis">Chasis</label><!--la etiqueta del imput de la caja de texto-->
          <input type="text" name="Chasis" class="form-control" placeholder="Chasis"><!--placeholder es el texto guia -->
        </div>

         <div class="form-group">
          <label for="Motor">Motor</label><!--la etiqueta del imput de la caja de texto-->
          <input type="text" name="Motor" class="form-control" placeholder="Motor"><!--placeholder es el texto guia -->
        </div>

        <div class="form-group">
          <label for="Modelo">Modelo</label>
          <input type="text" name="Modelo" class="form-control" placeholder="Modelo">
        </div>

        <div class="form.group">
          <label for="Color">Color</label>
          <input type="text" name="Color" class="form-control"  placeholder="Color">
        </div>


        <!--<div class="form-group">
          <label for="FchCrea">Fecha</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="FchCrea">
        </div>-->

        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="Usuario">
        </div>

        <!--<div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Modificar Fecha</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="form-group">
          <label for="UsrMod">Modificar Usuario</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Usuario">
        </div>

				<!--<div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>-->

        <div class="form-group">
          <label for="FlgEli">Usuario Mod</label>
          <input type="text" name="FlgEli" class="form-control" placeholder="Usuario">
        </div>

        <div class="form-group">
          <label for="RutaReferencia">Ruta Referencia</label>
          <input type="text" name="FlgEli" class="form-control" placeholder="Ruta Referencia">
        </div>

        <div class="form-group">
           <label for="RutaTarjeta">Ruta Tarjeta</label>
           <input type="text" name="RutaTarjeta" class="form-control" placeholder="Ruta Tarjeta">
        </div>

        <div class="form-group">
           <label for="IdEmpresa">IdEmpresa</label>
           <input type="text" name="IdEmpresa" class="form-control" placeholder="Id Empresa">
        </div>

        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>

        {!! Form::close() !!}
      </div>
    </div>
@endsection
