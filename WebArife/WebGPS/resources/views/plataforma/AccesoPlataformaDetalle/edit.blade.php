-@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar accesoplataformacomandos: {{$accesoplataformacomandos->UsrCrea}}</h3>
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

        {!!Form::model($accesoplataformadetalle,['method'=>'PATCH','route'=>['$accesoplataformadetalle.update',$accesoplataformadetalle->IdAccesoDetalle]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAccesoDetalle">Id AccesoDetalle</label>
          <input type="text" name="IdAccesoDetalle" class="form-control" value="{{$accesoplataformadetalle->IdAccesoDetalle}}" placeholder="IdAccesoDetalle">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAcceso">Id Acceso</label>
          <input type="text" name="IdAcceso" class="form-control" value="{{$accesoplataformadetalle->IdAcceso}}" placeholder="IdAcceso">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
       <div class="form-group">
       <label for="Idcontrato">id contrato</label>
       <input type="text" name="Idcontrato" class="form-control" value="{{$accesoplataformadetalle->Idcontrato}}" placeholder="Idcontrato">
       </div>
    </div>

  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">Crear Fecha</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$accesoplataformadetalle->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$accesoplataformadetalle->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$accesoplataformadetalle->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$accesoplataformadetalle->FchMod}}" placeholder="Fecha">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$accesoplataformadetalle->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$accesoplataformadetalle->WksMod}}" placeholder="WorkStation">
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
