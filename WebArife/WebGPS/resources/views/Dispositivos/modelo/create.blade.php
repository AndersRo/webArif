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

        <div class="row">


          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <input type="radio" class="op" name="opcion" value="N" checked> Nuevo<br>
                  <input type="radio" class="op" name="opcion" value="E"> Existente<br>
                </div>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="IdModelo">Id Modelo</label>
                  <input type="text" name="IdModelo" required value="{{old('IdModelo')}}" class="form-control" placeholder="Id Modelo">
              </div>
          </div>

                <script type="text/javascript">
                  $(function(){
                    $(".op").click(function(){
                      if ($(this).val()=='N') {
                        $("#NMarca").removeAttr('disabled');
                        $("#INM").removeAttr('disabled');
                        $("#SNM").attr('disabled','disabled');
                        $("#SNM").focus();
                      }else if($(this).val()=='E') {
                        $("#SNM").removeAttr('disabled')
                        $("#NMarca").attr('disabled','disabled');
                        $("#INM").attr('disabled','disabled');

                      }
                    })
                  })
                </script>

          <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="IdMarca">Id Marca</label>
                    <input id="INM" type="text" name="IdMarca" required value="{{old('IdMarca')}}" class="form-control" placeholder="Id Marca">
                </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="Descripcion">Nueva Marca</label>
                    <input id="NMarca" type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion">
                </div>
          </div>

          <!--<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                  <div class="form-group">
                      <a href="" data-target="#modal-create" data-toggle="modal"><button class="btn btn-primary pull-right">Agregar</button></a>
                  </div>
          </div>-->

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="Descripcion">Modelo</label>
                    <input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion">
                </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="IdMarca">Marca</label>
                    <select id="SNM" class="form-control selectpicker" name="IdMarca" data-live-search=true>
                      @foreach($marca as $mar)
                        <option value="{{$mar->IdMarca}}">{{$mar->Descripcion}}</option>
                      @endforeach
                    </select>
                </div>
          </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrCrea">Usuario</label>
                  <input type="text" name="UsrCrea" required value="{{old('UsrCrea')}}" class="form-control" placeholder="Usuario">
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="UsrCrea">Usuario</label>
                <input type="text" name="UsrCrea" required value="{{old('UsrCrea')}}" class="form-control" placeholder="Usuario">
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrMod">Usuario Mod</label>
                  <input type="text" name="UsrMod" required value="{{old('UsrMod')}}" class="form-control" placeholder="Usuario">
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="UsrMod">Usuario Mod</label>
                  <input type="text" name="UsrMod" required value="{{old('UsrMod')}}" class="form-control" placeholder="Usuario">
              </div>
        </div>

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
      @include('Dispositivos.modelo.magregar')
            {!! Form::close() !!}

@endsection
