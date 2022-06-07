<?php 
    include "conexion.php";
    $var_id = $_GET['id'];
    $query = "DELETE FROM noticias WHERE ID_NOTICIA = '$var_id' ";
    $result = mysqli_query($conexion,$query);

    if($result){
      echo '<script>
      window.location.href="../vistas/panelUsuario.php"
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