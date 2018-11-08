@extends ('layouts.admin')
@section ('contenido')
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Dispositivo</h3>
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

        {!! Form::open(array('url'=>'Dispositivos/dispositivo','method'=>'POST','autocomplete'=>'off')) !!}
        {{Form::token()}}

    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="IdDispositivo">Id</label>
                <input type="text" name="IdDispositivo" required value="{{old('IdDispositivo')}}" class="form-control" placeholder="Id Dispositivo">
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="Serie">Serie</label>
                <input type="text" name="Serie" required value="{{old('Serie')}}" class="form-control" placeholder="Serie">
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="IMEI">IMEI</label>
                <input type="text" name="IMEI" required value="{{old('IMEI')}}" class="form-control" placeholder="IMEI">
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="IdModelo">Id Modelo</label>
                <select class="form-control" name="IdModelo">
                  @foreach($modelo as $mod)
                  <option value="{{$mod->IdModelo}}">{{$mod->Descripcion}}</option>
                  @endforeach
                </select>
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="NroSim">Nro Sim</label>
                <input type="text" name="NroSim" required value="{{old('NroSim')}}" class="form-control" placeholder="Nro Sim">
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="NroIDN">Nro IDN</label>
                <input type="text" name="NroIDN" required value="{{old('NroIDN')}}" class="form-control" placeholder="Nro IDN">
            </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="form-group">
         <label for="IdEmpresa">Empresa</label>
           <select class="form-control" name="IdEmpresa">
            @foreach($empresa as $emp)
              <option value="{{$emp->IdEmpresa}}">{{$emp->NombreComercial}}</option>
            @endforeach
            </select>
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
