<style>
.modal-header{
  background-color:#428bca;
    border-color:#367fa9;
    color:white;
}
</style>
<div class="modal fade" role="dialog" id="_delete">
  <div class="modal-dialog modal-sm " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"><b>Mantenedor Cliente</b></h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
        <div class="row  ">
            <div class="col-md-12 ">
                <h4>¿Desea eliminar el registro?</h4>

            </div>
           </div>
      </div><!-- /.modal-content -->
     </div><!-- /.modal-dialog -->
                    <div class="modal-footer ">
                    <button type="button" class="btn btn-default pull-left col-xs-3" data-dismiss="modal">Cerrar</button>
                    <a href="admin/cliente/delete/<?php echo $row->idcliente; ?>" class="btn btn-primary  col-xs-5 pull-right">Eliminar</a>
                  </div>
    </div><!-- /.modal -->
     </div>
</div>
