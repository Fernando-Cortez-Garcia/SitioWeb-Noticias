<!-- Modal para eliminar una noticia -->
<div class="modal" id="modaleliminar<?php echo $row['ID_NOTICIA']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <form method="POST" action="../php/eliminarnoticia.php?id=<?php echo $row['ID_NOTICIA']?>">
                <h5>¿Esta seguro de eliminar esta noticia?</h5>
                <input type="hidden" name="id" value="<?php echo $row['ID_NOTICIA']?>">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="modal-title"><?php echo $row['CABEZERA_NOT']; ?></h6>
                </div>
                <div class="modal-footer">
                <button type="submit" name="eliminar"  class="btn btn-primary">Aceptar <i class="fa-solid fa-trash"></i></button>    
            </form>
          </div>
        </div>
    </div>
</div>