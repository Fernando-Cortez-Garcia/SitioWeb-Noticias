<?php 
 include "conexion.php";
 $var_id = $_GET['id'];
 $query = "DELETE FROM usuario WHERE ID_USUARIO = '$var_id' ";
 $result = mysqli_query($conexion,$query);
  if($result){
    echo '<script>
    window.location.href="../vistas/vistadmin.php"
    </script>';
    echo '<div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
    </div>';
  }else{
    echo '<script>
    var mensaje = document.getElementById("mensaje");
    mensaje.innerHTML = "Noticia no eliminada";
    </script>';
  }
?>