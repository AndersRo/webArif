<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-create">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close" name="button">
            <span aria-hidden="true">x</span>
          </button>
          <h4 class="modal-title">Agregar Marca</h4>
        </div>
        <div class="modal-body">

          {!! Form::open(array('url'=>'Dispositivos/marca','method'=>'POST','autocomplete'=>'off')) !!}
          {{Form::token()}}

      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="IdMarca">Id</label>
                  <input type="text" name="IdMarca" required value="{{old('IdMarca')}}" class="form-control" placeholder="Id Marca">
              </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                  <label for="Descripcion">Descripcion</label>
                  <input type="text" name="Descripcion" required value="{{old('Descripcion')}}" class="form-control" placeholder="Descripcion">
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

        </div>

          {!! Form::close() !!}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
</div>
