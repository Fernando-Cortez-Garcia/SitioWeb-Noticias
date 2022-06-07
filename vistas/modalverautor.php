<style>
 .header{
   background-color:black;
   color: white;
 }

</style>
<!-- modal para mostrar las noticias -->
<div class="modal" id="modalverAutor<?php echo $row['ID_USUARIO']?>" tabindex="-1">
    <div class="modal-dialog w-100">
        <div class="modal-content">
            <div class="modal-header header">
              <h2 class="modal-title">AUTOR : <?php echo $row['NOMBRE']; ?> <i class="fa-solid fa-user"></i></h2>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body header">
            <form>
                <div class="mb-4">
                    <label type="text" class="form-label">Nombre</label>
                    <h5><?php echo $row['NOMBRE'],' ',$row['APELLIDOS']?></h5>
                </div>
                
                <div class="mb-4">
                    <label type="text" class="form-label">Correo</label>
                    <h5><?php echo $row['CORREO'];?></h5>
                </div>
                <div class="mb-4">
                    <label type="text" class="form-label">Contraseña</label>
                    <h5><?php echo $row['PWD'];?></h5>
                </div>
               
                
            </form>
            
             
            </div>
          </div>
    </div>
</div>