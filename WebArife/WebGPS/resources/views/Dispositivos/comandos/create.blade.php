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

        {!! Form::open(array('url'=>'Dispositivos/comandos','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}
        <div class="form-group">
          <label for="IdComandos">Id</label>
          <input type="text" name="IdComandos" required value="{{old('IdComandos')}}" class="form-control" placeholder="Id Comandos">
        </div>
        <div class="form-group">
          <label for="CodTipoComandos">CodTipoComandos</label>
          <input type="text" name="CodTipoComandos" required value="{{old('CodTipoComandos')}}" class="form-control" placeholder="CodTipoComandos">
        </div>
        <div class="form-group">
          <label for="Comandos">Comandos</label>
          <input type="text" name="Comandos" required value="{{old('Comandos')}}" class="form-control" placeholder="Comandos">
        </div>
        <div class="form-group">
          <label for="IdModelo">IdModelo</label>
          <input type="text" name="IdModelo" required value="{{old('IdModelo')}}" class="form-control" placeholder="IdModelo">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection
