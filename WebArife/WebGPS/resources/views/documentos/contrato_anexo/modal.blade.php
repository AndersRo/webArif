<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$cna->IdContratoAnexo}}">
  {{Form::Open(array('action'=>array('Contrato_AnexoController@destroy',$cna->IdContratoAnexo),'method'=>'delete'))}}
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="close" name="button">
            <span aria-hidden="true">x</span>
          </button>
          <h4 class="modal-title">Eliminar Anexo</h4>
        </div>
        <div class="modal-body">
          <p>Confirme que desea Eliminar el Anexo</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
      </div>
    </div>
  {{Form::Close()}}
</div>
