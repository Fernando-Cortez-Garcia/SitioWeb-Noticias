<?php 
 include_once 'conexion.php';
 include '../librerias/boostrap.php';
  if(isset($_POST['btn_registrar'])){
      $nombre = $_POST['f_nombre'];
      $apellidos = $_POST['f_apellidos'];
      $correo = $_POST['f_correo'];
      $privilegio = $_POST['f_privilegio'];
      $contraseña = $_POST['f_contra'];
      $query = "INSERT INTO usuario (ID_USUARIO,privilegio,NOMBRE,APELLIDOS,CORREO,PWD)  VALUES  ('','$privilegio','$nombre','$apellidos','$correo','$contraseña')";
      $result = mysqli_query($conexion,$query);
        if($result){
          echo '<div class="alert alert-success fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Autor Registrado con Exito.
          </div>';
          header('Refresh: 1; URL=../vistas/vistadmin.php');
        } else {
          echo '<div class="alert alert-danger fixed-top text-center" role="alert"><i class="fa-solid fa-circle-exclamation"></i> Error al registrar el autor.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            
      }
  }
?>