<?php 
  include 'controlUsuarios.php';
  include 'conexion.php';
  //insertar el contenido del editor en la base de datos
  $cabezera = $_POST['f_cabezera'];
  $titulo = $_POST['f_titulo'];
  $categoria = $_POST['f_categoria'];
  $contenido = $_POST['f_contenido'];
  $imagen =addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
  $date = date('Y-m-d');
  // REALIZA LA CONSULTA
  $sql = "INSERT INTO noticias (ID_NOTICIA, DSC_NOTICIA, CABEZERA_NOT, TITULO_NOTI,
  IMAGEN,AUTOR,FECHA_PUBLICACION,ID_CATEGORIA,ID_USUARIO) VALUES ('','$contenido','$cabezera','$titulo','$imagen','$nombre','$date','$categoria','$idusuario')";
  $result = mysqli_query($conexion, $sql);
    if($result){
        echo '<script>
        alert("Noticia publicada con exito");
        window.location.href="../vistas/crearnoticia.php";
        </script>';
    }else{
        echo '<script>
        alert("Error al publicar la noticia");
        </script>';
    }
?>