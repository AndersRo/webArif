@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Dispositivos Marca</h3>
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

        {!! Form::open(array('url'=>'Dispositivos/modelo','method'=>'POST','autocomplete'=>'off', 'files'=>'true')) !!}
        {{Form::token()}}

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="IdModelo">Id Modelo</label>
                <input type="text" name="IdModelo" required value="{{old('IdModelo')}}" class="form-control" placeholder="Id Modelo">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="IdMarca">Id Marca</label>
                  <input type="text" name="IdMarca" required value="{{old('IdMarca')}}" class="form-control" placeholder="Id Marca">
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="Descripcion">Descripcion</label>
                  <input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion">
              </div>
        </div>

        <!--<div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" required value="{{old('FchCrea')}}" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrCrea">Usuario</label>
                  <input type="text" name="UsrCrea" required value="{{old('UsrCrea')}}" class="form-control" placeholder="Usuario">
              </div>
        </div>

        <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="WksCrea">WorkStation</label>
                  <input type="text" name="WksCrea" required value="{{old('WksCrea')}}" class="form-control" placeholder="WorkStation">
              </div>
        </div>-->

        <!--<div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" required value="{{old('FchMod')}}" class="form-control" placeholder="Fecha">
        </div>-->

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrMod">Usuario Mod</label>
                  <input type="text" name="UsrMod" required value="{{old('UsrMod')}}" class="form-control" placeholder="Usuario">
              </div>
        </div>

        <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="WksMod">WorkStation Mod</label>
                    <input type="text" name="WksMod" required value="{{old('WksMod')}}" class="form-control" placeholder="WorkStation">
                </div>
        </div>-->

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="FotoReferencial">Foto Referencial</label>
                    <input type="file" name="FotoReferencial" class="form-control-file">
                </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <button class="btn btn-danger" type="reset">Eliminar</button>
                </div>
        </div>
      </div>
            {!! Form::close() !!}

@endsection
