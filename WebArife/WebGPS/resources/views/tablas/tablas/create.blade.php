@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Comandos</h3>
        @if(count($errors)>0)
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
        @endif

        {!! Form::open(array('url'=>'tablas/tablas','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}
        <div class="form-group">
          <label for="IdTabla">Id</label>
          <input type="text" name="IdTabla" required value="{{old('IdTabla')}}" class="form-control" placeholder="Id Tabla">
        </div>
        <div class="form-group">
          <label for="Descripcion">Descripcion</label>
          <input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion">
        </div>
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" placeholder="Fecha">
        </div>
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" placeholder="WorkStation">
        </div>
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" placeholder="Fecha">
        </div>
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" placeholder="WorkStation">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection
