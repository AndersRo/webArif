@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Marca: {{$marca->IdMarca}}</h3>
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

        {!!Form::model($marca,['method'=>'PATCH','route'=>['marca.update',$marca->IdMarca]])!!}
        {{Form::token()}}
    <div class="row">

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdMarca">IdMarca</label>
          <input type="text" name="IdMarca" class="form-control" value="{{$marca->IdMarca}}" placeholder="IdMarca">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Descripcion">Descripcion</label>
          <input type="text" name="Descripcion" class="form-control" value="{{$marca->Descripcion}}" placeholder="Descripcion">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" value="{{$marca->UsrCrea}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$marca->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$marca->FchMod}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$marca->UsrMod}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$marca->WksMod}}" placeholder="WorkStation">
        </div>
      </div>

      <!--<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" value="{{$marca->FchCrea}}" placeholder="Fecha">
        </div>
      </div>-->

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <button class="btn btn-primary" type="submit">Guardar</button>
          <button class="btn btn-danger" type="reset">Eliminar</button>
        </div>
      </div>
    </div>
        {!! Form::close() !!}
@endsection
