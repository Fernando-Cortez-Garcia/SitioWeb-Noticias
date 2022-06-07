<div class="modal" id="modaleliminarAutor<?php echo $row['ID_USUARIO']?>" tabindex="-1">
    <div class="modal-dialog ">
        <div class="modal-content">
          <div class="modal-header">
            <form method="POST" action="../php/eliminarautor.php?id=<?php echo $row['ID_USUARIO']?>">
                <h5>¿Esta seguro de eliminar a este autor?</h5>
                <input type="hidden" name="id" value="<?php echo $row['ID_USUARIO']?>">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6 class="modal-title"><?php echo $row['NOMBRE'] , " ", $row['APELLIDOS']; ?>  <i class="fa-solid fa-user"></i></h6>
                </div>
                <div class="modal-footer">
                <button type="submit" name="eliminar"  class="btn btn-primary">Aceptar <i class="fa-solid fa-trash"></i></button>    
            </form>
          </div>
        </div>
    </div>
</div>