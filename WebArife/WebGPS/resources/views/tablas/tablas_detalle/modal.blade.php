<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$tad->IdTablaDetalle}}">
  {{Form::Open(array('action'=>array('Tablas_DetalleController@destroy',$tad->IdTablaDetalle),'method'=>'delete'))}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close" name="button">
            <span aria-hidden="true">x</span>
          </button>
          <h4 class="modal-title">Eliminar Actor</h4>
        </div>
        <div class="modal-body">
          <p>Confirme que desea Eliminar el actor</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  {{Form::Close()}}
</div>
