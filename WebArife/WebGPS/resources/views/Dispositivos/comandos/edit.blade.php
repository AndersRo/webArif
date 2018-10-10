@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Comandos: {{$comandos->IdComandos}}</h3>
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

        {!!Form::model($comandos,['method'=>'PATCH','route'=>['comandos.update',$comandos->IdComandos]])!!}
        {{Form::token()}}
    <div class="row">

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdComandos">Idcomandos</label>
          <input type="text" name="IdComandos" class="form-control" value="{{$comandos->IdComandos}}" placeholder="IdComandos">
        </div>
      </div>

      <div class="col-lg-6 col-sm-  6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="CodTipoComandos">tipo comandos</label>
          <input type="text" name="CodTipoComandos" class="form-control" value="{{$comandos->CodTipoComandos}}" placeholder="CodTipoComandos">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Comandos">Comando</label>
          <input type="text" name="Comandos" class="form-control" value="{{$comandos->Comandos}}" placeholder="Comandos">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdModelo">IdModelo</label>
          <input type="text" name="IdModelo" class="form-control" value="{{$comandos->IdModelo}}" placeholder="IdModelo">
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
