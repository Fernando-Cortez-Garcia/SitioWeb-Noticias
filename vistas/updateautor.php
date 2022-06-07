
 <!-- modal para editar la noticia -->
 <div class="modal" id="modalupdateAutor<?php echo $row['ID_USUARIO']?>" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Editar a  <?php echo $row['NOMBRE']?> <i class="fa-solid fa-user"></i> </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col-sm-10 alto-text">
                                  <form method="POST" action="../php/editarAutor.php"">
                                      <input type="hidden" name="f_id" value="<?php echo $row['ID_USUARIO']?>">
                                      <div class="mb-4">
                                          <label type="text" class="form-label">Nombre</label>
                                          <input type="text" name="f_nombre" value="<?php echo $row['NOMBRE']?>" class="form-control">
                                      </div>
                                      <div class="mb-4">
                                          <label type="text" class="form-label">Apellidos</label>
                                          <input type="text" name="f_apellidos" value="<?php echo $row['APELLIDOS']?>" class="form-control">
                                      </div>
                                      <div class="mb-4">
                                          <label type="text" class="form-label">Correo</label>
                                          <input type="text" name="f_correo" value="<?php echo $row['CORREO']?>" class="form-control">
                                      </div>
                                          
                                      <div class="mb-4">
                                      <label for="text" class="form-label" >Privilegio</label>
                                          <select class="form-select" aria-label="Default select example " name="f_privilegio">
                                              <option value="1" <?php if($row['privilegio']=='1'){echo "selected";}?>>Administrador</option>
                                              <option value="2" <?php if($row['privilegio']=='2'){echo "selected";}?>>Autor</option>
                                          </select>
                                      </div>
                                      <div class="mb-4">
                                          <label type="text" class="form-label">Contraseña</label>
                                          <input type="text" name="f_contraseña" value="<?php echo $row['PWD']?>" class="form-control">
                                      </div>
                                   
                                  
                                      
                                      <div class="mt-4">
                                      <button type="submit" class="btn btn-primary">Guardar</button>       
                                      </div>
                                  </form>
                  </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
