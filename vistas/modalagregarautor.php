<!-- modal para editar la noticia -->
<?php include '../js/funciones.php';?>
<div class="modal" id="modalAgregar" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <h5 class="modal-title">Agregar Autor <i class="fa-solid fa-user"></i></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="col-sm-10 alto-text">
              <form action="../php/registrarusuario.php" method="POST">
                <div class="mb-4">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="f_nombre" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Apellidos</label>
                        <input type="text" name="f_apellidos" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" name="f_correo" class="form-control">
                    </div>
                    <div class="mb-4">
                         <label for="email" class="form-label">Privilegio de Usuario</label>
                        <select class="form-select" aria-label="Default select example " name="f_privilegio">
                                                <option value="1" >ADMINISTRADOR</option>
                                                <option value="2" >AUTOR</option>
                        </select>
                    </div>
                    <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                        <input type="password" name="f_contra" id="f_password" class="form-control" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Confirmar contraseña</label>
                        <input class="form-control" type="password" id="f_password2" placeholder="Contraseña"  Onchange= "verificarPasswords()" required>
                    </div>
                    <div id="msg"></div>
                    <!-- Mensajes de Verificación -->
                    <div style="display:none" name="error" id="msj_error" class="alert alert-danger" role="alert">
                    </div>
                    <div style="display:none" name="ok" id="msj_ok" class="alert alert-success" role="alert">
                    </div>
                    
                                      
                               
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary mb-5" name="btn_registrar">Guardar <i class="fa-solid fa-user-check"></i></button>
                    </div>                  
                </form>
                  </div>
            </div>
        </div>
    </div>
</div>