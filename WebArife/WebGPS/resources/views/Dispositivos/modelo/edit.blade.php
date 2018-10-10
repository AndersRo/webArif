@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Modelo: {{$Modelo->UsrCrea}}</h3>
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

        {!!Form::model($modelo,['method'=>'PATCH','route'=>['$modelo.update',$modelo->IdModelo]])!!}
        {{Form::token()}}
    <div class="row">

       <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdModelo">Id</label>
          <input type="text" name="IdModelo" class="form-control" value="{{$modelo->IdModelo}}" placeholder="IdModelo">
        </div>
      </div>


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="Descripcion">Descripcion</label>
          <input type="text" name="Descripcion" class="form-control" value="{{$modelo->Descripcion}}" placeholder="Descripcion">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchCrea">Fecha Creacion</label>
          <input type="text" name="FchCrea" class="form-control" value="{{$modelo->FchCrea}}" placeholder="Fecha">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrCrea">Usuario</label>
          <input type="text" name="UsrCrea" class="form-control" value="{{$modelo->UsrCrea}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$modelo->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$modelo->FchMod}}" placeholder="Fecha">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$modelo->UsrMod}}" placeholder="Usuario">
        </div>
      </div>

      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$modelo->WksMod}}" placeholder="WorkStation">
        </div>
      </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
        <label for="FotoReferencial">FotoReferencial</label>
        <input type="text" name="FotoReferencial" class="form-control" value="{{$modelo->FotoReferencial}}" placeholder="FotoReferencial">
     </div>
    </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
      <div class="form-group">
      <label for="IdMarca">IdMarca</label>
      <input type="text" name="IdMarca" class="form-control" value="{{$modelo->IdMarca}}" placeholder="IdMarca">
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
