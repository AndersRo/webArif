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

        {!!Form::model($mecanico,['method'=>'PATCH','route'=>['mecanico.update',$mecanico->IdMecanico]])!!}
        {{Form::token()}}
        <div class="form-group">
          <label for="IdActor">Id</label>
          <input type="text" name="IdActor" value="{{$mecanico->IdActor}}" class="form-control" placeholder="Id">
        </div>
				<div class="form-group">
          <label for="IdMecanico">Id Mecanico</label>
          <input type="text" name="IdMecanico" value="{{$mecanico->IdMecanico}}" class="form-control" placeholder="Mecanico">
        </div>
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" value="{{$mecanico->FchCrea}}" class="form-control" placeholder="Fecha">
        </div>
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" value="{{$mecanico->UsrCrea}}" class="form-control" placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" value="{{$mecanico->WksCrea}}" class="form-control" placeholder="WorkStation">
        </div>
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" value="{{$mecanico->FchMod}}" class="form-control" placeholder="Fecha">
        </div>
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" value="{{$mecanico->UsrMod}}" class="form-control" placeholder="Usuario">
        </div>
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" value="{{$mecanico->WksMod}}" class="form-control" placeholder="WorkStation">
        </div>
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
        {!! Form::close() !!}
      </div>
    </div>
@endsection