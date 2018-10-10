@extends ('layouts.admin')
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

        {!!Form::model($accesoplataformacomandos,['method'=>'PATCH','route'=>['$accesoplataformacomandos.update',$accesoplataformacomandos->IdAccesoDetalle]])!!}
        {{Form::token()}}
   <div class="row">

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAccesoDetalle">Id AccesoDetalle</label>
          <input type="text" name="IdAccesoDetalle" class="form-control" value="{{$accesoplataformacomandos->IdAccesoDetalle}}" placeholder="IdAccesoDetalle">
        </div>
      </div>

     <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="IdAccesoComandos">Id AccesoComandos</label>
          <input type="text" name="IdAccesoComandos" class="form-control" value="{{$accesoplataformacomandos->IdAccesoComandos}}" placeholder="IdAccesoComandos">
        </div>
      </div>


  <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
           <div class="form-group">
             <label for="FchCrea">WorkStation</label>
             <input type="text" name="FchCrea" class="form-control" value="{{$accesoplataformacomandos->FchCrea}}" placeholder="FchCrea">
           </div>
         </div>

         <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
              <div class="form-group">
                <label for="UsrCrea">Crear Usuario</label>
                <input type="text" name="UsrCrea" class="form-control" value="{{$accesoplataformacomandos->UsrCrea}}" placeholder="UsrCrea">
              </div>
            </div>

   <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksCrea">WorkStation</label>
          <input type="text" name="WksCrea" class="form-control" value="{{$accesoplataformacomandos->WksCrea}}" placeholder="WorkStation">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="FchMod">Fecha Mod</label>
          <input type="text" name="FchMod" class="form-control" value="{{$accesoplataformacomandos->FchMod}}" placeholder="Fecha">
        </div>
      </div>

    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="UsrMod">Usuario Mod</label>
          <input type="text" name="UsrMod" class="form-control" value="{{$accesoplataformacomandos->UsrMod}}" placeholder="Usuario">
            </div>
      </div>


      <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
        <div class="form-group">
          <label for="WksMod">WorkStation Mod</label>
          <input type="text" name="WksMod" class="form-control" value="{{$accesoplataformacomandos->WksMod}}" placeholder="WorkStation">
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
